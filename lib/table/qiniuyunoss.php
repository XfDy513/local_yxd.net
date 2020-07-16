<?php

if (!defined('ROOT')) exit('Can\'t Access !');

if (is_file(__DIR__ . '/../common/plugins/vendor/oss-sdk-qiniu/autoload.php')) {
    require_once __DIR__ . '/../common/plugins/vendor/oss-sdk-qiniu/autoload.php';
}
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
class qiniuyunoss extends table {

    public $name = 'aliyqiniuyunossunoss';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new qiniuyunoss();
            self::$me = $class;
        }
        return self::$me;
    }



    public function __construct()
    {
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Auth.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Region.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Config.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Zone.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Storage/BucketManager.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/functions.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Storage/UploadManager.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Storage/FormUploader.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Http/Client.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Http/Request.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Http/Response.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-qiniu/src/Qiniu/Http/Error.php');

    }

    public function qiniuyunossconfig(){
        $qiniuyunosssetting=qiniuyunossconfig::getInstance()->getrow("");
        return array(
            "oss_accessKey"=>$qiniuyunosssetting['oss_accessKey'],
            "oss_secretKey"=>$qiniuyunosssetting['oss_secretKey'],
            "oss_domain"=>$qiniuyunosssetting['oss_domain'],
            "oss_bucket"=>$qiniuyunosssetting['oss_bucket'],
        );
    }


    /**
     * OSS读取列表
     * @return null
     */
    function osslist($prefix,$delimiter,$nextMarker,$maxkeys)
    {
        $qiniuunossconfig=$this->qiniuyunossconfig();
        $accessKeyId = $qiniuunossconfig['oss_accessKey'];  // Access Key ID  ''
        $accessKeySecret = $qiniuunossconfig['oss_secretKey'];  // Access Key Secret  ''
        $bucket = $qiniuunossconfig['oss_bucket'];  // Access Key Secret  ''

        //鉴权
        $auth = new Auth($accessKeyId, $accessKeySecret);
        $bucketMgr = New BucketManager($auth);


        list($marker, $err) = $bucketMgr->listFiles($bucket, $prefix, $nextMarker, $maxkeys, $delimiter);
        if ($err !== null) {
            var_dump($err);
        }
        return $marker;
    }



    /**
     * OSS上传本地文件内容
     * @param string $savename 上传的文件名称
     * @param string $filepath 本地文件路径
     * @return null
     */
    public function ossUpload($filepath, $savename)
    {
        $qiniuunossconfig=$this->qiniuyunossconfig();
        $accessKeyId = $qiniuunossconfig['oss_accessKey'];  // Access Key ID  ''
        $accessKeySecret = $qiniuunossconfig['oss_secretKey'];  // Access Key Secret  ''
        //鉴权
        $auth = new Auth($accessKeyId, $accessKeySecret);
        $bucketMgr = New BucketManager($auth);
        $bucket = $qiniuunossconfig['oss_bucket'];  // Bucket名称

        $token = $auth->uploadToken($bucket);
        $uploadMgr = New UploadManager();

        list($ret, $err) = $uploadMgr->putFile($token, $savename, $filepath);
        if ($err !== null) {
            var_dump($err);
        }
        return $ret;
    }

    /**
     * OSS下载文件内容
     * @param string $object 表示您在下载文件时需要指定的文件名称，如abc/efg/123.jpg。
     * @param string $localfile 指定文件下载路径。
     * @return null
     */
    function ossDoewm($object,$localfile)
    {
        $qiniuunossconfig=$this->qiniuyunossconfig();
        $accessKeyId = $qiniuunossconfig['oss_accessKey'];  // Access Key ID  ''
        $accessKeySecret = $qiniuunossconfig['oss_secretKey'];  // Access Key Secret  ''
        $endpoint = $qiniuunossconfig['oss_domain'];
        //鉴权
        $auth = new Auth($accessKeyId, $accessKeySecret);
        // 对链接进行签名
        $signedUrl = $auth->privateDownloadUrl($endpoint.'/'.$object);

        echo "<script>window.location.replace('http://".$signedUrl."');</script>";
        exit;

    }


    /**
     * OSS删除文件
     * @param string $object 删除的文件名
     * @return null
     */
    function ossdelete($object)
    {
        $qiniuunossconfig=$this->qiniuyunossconfig();
        $accessKeyId = $qiniuunossconfig['oss_accessKey'];  // Access Key ID  ''
        $accessKeySecret = $qiniuunossconfig['oss_secretKey'];  // Access Key Secret  ''
        $endpoint = $qiniuunossconfig['oss_domain'];
        $bucket = $qiniuunossconfig['oss_bucket'];
        //鉴权
        $auth = new Auth($accessKeyId, $accessKeySecret);
        $bucketMgr = New BucketManager($auth);

        $err = $bucketMgr->delete($bucket, $object);
        if ($err !== null) {
            var_dump($err);}
        else {
            echo 'delete ok';
        }
    }

    /**
     * OSS删除文件夹
     * @param string $object 删除的文件名
     * @return null
     */
    function ossdeletefile($object)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];
        try {
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $file=$this->osswherelist( $object.'/',"/",null, 1000);
            if(is_array($file['filename'])){
                foreach ($file['filename'] as $filename){
                    $exist = $ossClient->doesObjectExist($bucket, $filename);
                    if($exist){   //判断是否存在
                        $result = $ossClient->deleteObject($bucket, $filename);
                    }
                }
            }
        } catch (OssException $e) {
            print_r(__FUNCTION__ . ": FAILED\n");
            print_r($e->getMessage() . "\n");
        }
        return $result;

    }


    /**
     * OSS删除多个文件
     * @param string $object 删除的文件名
     * @return null
     */
    function ossdrop($objects)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];
        try {
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $result = $ossClient->deleteObjects($bucket, $objects);
        } catch (OssException $e) {
            print_r(__FUNCTION__ . ": FAILED\n");
            print_r($e->getMessage() . "\n");
        }
        return $result;

    }


}