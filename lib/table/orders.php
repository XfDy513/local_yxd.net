<?php

if (!defined('ROOT')) exit('Can\'t Access !');

class orders extends table {
    public $name='p_orders';
    static $me;
    public static function getInstance() {
        if (!self::$me) {
            $class=new orders();
            self::$me=$class;
        }
        return self::$me;
    }

    public function attrLabels()
    {
        return array(
            'id' => lang_admin('number'),
            'oid' => lang_admin('order_number'),
            'aid' => lang_admin('product_number'),
            'expressid' => lang_admin('logistics_document_number'),
            'expresstype' => lang_admin('logistics_types'),
            'status' => lang_admin('state'),
            'mid' => lang_admin('customer').lang_admin('number'),
            'adddate' => lang_admin('order_time'),
            'telphone' => lang_admin('contact').lang_admin('tel'),
            'pnums' => lang_admin('pay_num'),
            'pname' => lang_admin('unit_name'),
            'address' => lang_admin('detailed').lang_admin('address'),
            'postcode' => lang_admin('postal_code'),
            'content' => lang_admin('order').lang_admin('leaving_a_message'),
            'courier_number' => lang_admin('courier_number'),
            's_status' => lang_admin('payment').lang_admin('state'),
            'trade_no' => lang_admin('payment').lang_admin('number'),
            'ip' => 'IP'.lang_admin('address'),
        );
    }

    function getcols($act) {
        return '*';
    }


//物流查询
    function querexpress($expressid,$expresstype,$view)
    {
        $cs = new expressconfig();
        $sps = $cs->getrows("userid='" .$view->user['userid'] . "'", 1);
        if ($sps[0]['ebusinessid'] != '' && $sps[0]['appkey'] != '' && $sps[0]['requrl'] != '') {
            //电商ID
            defined('EBusinessID') or define('EBusinessID', $sps[0]['ebusinessid']);
            //电商加密私钥，快递鸟提供，注意保管，不要泄漏
            defined('AppKey') or define('AppKey', $sps[0]['appkey']);
            //请求url
            defined('ReqURL') or define('ReqURL', $sps[0]['requrl']);
            //调用查询物流轨迹
            //---------------------------------------------
            $orders = new orders();
            $kgs = $expresstype;//快递公司简称，官方有文档"ZTO"
            $number = $expressid;//快递单号"75155316242395"
            $logisticResult = $orders->getOrderTracesByJson($kgs, $number);
            $data = json_decode($logisticResult, true);
            if ($data['Success'] == true) {  //返回信息成功
                $str = "<dl class=\"logistics-query-list\">";
                for ($i = 0;
                     $i < count($data['Traces']);
                     $i++) {
                    $str .= "<dd><span>" . $data['Traces'][$i]['AcceptTime'] . "</span>" . $data['Traces'][$i]['AcceptStation'] . "</dd>";
                }
                $str.="</dl>";
                //echo "您查询的单号是：" . $data['LogisticCode'] . "<br/>  物流信息：<br/>" . $str . "";
                $view->logisticCode = $data['LogisticCode'];
                $view->str = $str;
            }
        } else {
            alertinfo(lang_admin('improve_configuration_of_express_birds'), url('express/config/table/expressconfig'));
            exit;
        }
    }

    /**
     * Json方式 查询订单物流轨迹
     *$kgs string 快递公司
     *$number string 快递单号
     */
    function getOrderTracesByJson($kgs, $number)
    {
        $requestData = "{'OrderCode':'','ShipperCode':'$kgs','LogisticCode':'$number'}";
        $datas = array(
            'EBusinessID' => EBusinessID,
            'RequestType' => '1002',
            'RequestData' => urlencode($requestData),
            'DataType' => '2',
        );
        $datas['DataSign'] = $this->encrypt($requestData, AppKey);
        $result = $this->sendPost(ReqURL, $datas);
        //根据公司业务处理返回的信息......
        return $result;
    }

    /**
     * post提交数据
     * @param string $url 请求Url
     * @param array $datas 提交的数据
     * @return url响应返回的html
     */
    function sendPost($url, $datas)
    {
        $temps = array();
        foreach ($datas as $key => $value) {
            $temps[] = sprintf('%s=%s', $key, $value);
        }
        $post_data = implode('&', $temps);
        $url_info = parse_url($url);
        if (empty($url_info['port'])) {
            $url_info['port'] = 80;
        }
        $httpheader = "POST " . $url_info['path'] . " HTTP/1.0\r\n";
        $httpheader .= "Host:" . $url_info['host'] . "\r\n";
        $httpheader .= "Content-Type:application/x-www-form-urlencoded\r\n";
        $httpheader .= "Content-Length:" . strlen($post_data) . "\r\n";
        $httpheader .= "Connection:close\r\n\r\n";
        $httpheader .= $post_data;
        $fd = fsockopen($url_info['host'], $url_info['port']);
        fwrite($fd, $httpheader);
        $gets = "";
        $headerFlag = true;
        while (!feof($fd)) {
            if (($header = @fgets($fd)) && ($header == "\r\n" || $header == "\n")) {
                break;
            }
        }
        while (!feof($fd)) {
            $gets .= fread($fd, 128);
        }
        fclose($fd);
        return $gets;
    }

    /**
     * 电商Sign签名生成
     * @param data 内容
     * @param appkey Appkey
     * @return DataSign签名
     */
    function encrypt($data, $appkey)
    {
        return urlencode(base64_encode(md5($data . $appkey)));
    }



}