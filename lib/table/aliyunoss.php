<?php

if (!defined('ROOT')) exit('Can\'t Access !');

if (is_file(__DIR__ . '/../common/plugins/vendor/oss-sdk-php/autoload.php')) {
    require_once __DIR__ . '/../common/plugins/vendor/oss-sdk-php/autoload.php';
}
use OSS\OssClient;
use OSS\Core\OssException;
class aliyunoss extends table {

    public $name = 'aliyunoss';
    public static $me;

    public static function getInstance()
    {
        if (!self::$me) {
            $class = new aliyunoss();
            self::$me = $class;
        }
        return self::$me;
    }



    public function __construct()
    {
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/OssClient.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Core/OssUtil.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/Result.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Core/OssException.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Core/MimeTypes.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Http/RequestCore.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Http/ResponseCore.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Http/RequestCore_Exception.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/PutSetDeleteResult.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/BodyResult.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/DeleteObjectsResult.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/ListObjectsResult.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Result/ExistResult.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Model/ObjectInfo.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Model/ObjectListInfo.php');
        include_once(ROOT . '/common/plugins/vendor/oss-sdk-php/src/OSS/Model/PrefixInfo.php');
    }

    public function aliyunossconfig(){
        $aliyunosssetting=aliyunosssetting::getInstance()->getrow("");
        return array(
            "oss_accessKey"=>$aliyunosssetting['oss_accessKey'],
            "oss_secretKey"=>$aliyunosssetting['oss_secretKey'],
            "oss_domain"=>$aliyunosssetting['oss_domain'],
            "oss_bucket"=>$aliyunosssetting['oss_bucket'],
        );
    }


    /**
     * OSS��ȡ�б�
     * @return null
     */
    function osslist()
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];

        $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        $filename=array();
        $Foldername=array();
        $record_count=0;
        while (true) {
            try {
                $listObjectInfo = $ossClient->listObjects($bucket, null);
            } catch (OssException $e) {
                printf(__FUNCTION__ . ": FAILED\n");
                printf($e->getMessage() . "\n");
                return ;
            }
            // �õ�nextMarker������һ��listObjects���������һ���ļ�����һ���ļ���ʼ������ȡ�ļ��б�
            $nextMarker = $listObjectInfo->getNextMarker();
            $listObject = $listObjectInfo->getObjectList();
            $listPrefix = $listObjectInfo->getPrefixList();
            if (!empty($listObject)) {
                foreach ($listObject as $objectInfo) {
                    $filename[]=$objectInfo->getKey();
                    $record_count=$record_count+1;
                }
            }
            if (!empty($listPrefix)) {
                foreach ($listPrefix as $prefixInfo) {
                    $Foldername[]=$prefixInfo->getPrefix();
                    $record_count=$record_count+1;
                }
            }
            if ($nextMarker === '') {
                break;
            }
        }
        return array("filename"=>$filename,"Foldername"=>$Foldername,"record_count"=>$record_count);

    }

    /**
     * OSS��ȡ�б�  ������
     *  @param string $prefix ���β�ѯ�����ǰ׺��
     * @param string $delimiter ���ļ����ƽ��з����һ���ַ���CommonPrefixes����delimiter��β�����й�ͬǰ׺���ļ����ϡ�
     * @param string $nextMarker ���������о��ļ������
     * @param string $maxkeys �о��ļ�����������Ĭ��Ϊ100�����ֵΪ1000
     * @return null
     */
    function osswherelist($prefix,$delimiter,$nextMarker,$maxkeys)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];

        $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        $options = array(
            'delimiter' => $delimiter,
            'prefix' => $prefix,
            'max-keys' => $maxkeys,
            'marker' => $nextMarker,
        );
        try {
            $listObjectInfo = $ossClient->listObjects($bucket, $options);
        } catch (OssException $e) {
            printf(__FUNCTION__ . ": FAILED\n");
            printf($e->getMessage() . "\n");
            return;
        }
        $nextMarker = $listObjectInfo->getNextMarker();
        $objectList = $listObjectInfo->getObjectList(); // object list
        $prefixList = $listObjectInfo->getPrefixList(); // directory list
        $filename=array();
        $Foldername=array();
        $record_count=0;
        if (!empty($objectList)) {
            foreach ($objectList as $objectInfo) {
                $filename[]=$objectInfo->getKey();
                $record_count=$record_count+1;
            }
        }
        if (!empty($prefixList)) {
            foreach ($prefixList as $prefixInfo) {
                $Foldername[]=$prefixInfo->getPrefix();
                $record_count=$record_count+1;
            }
        }
        return array("filename"=>$filename,"Foldername"=>$Foldername,"record_count"=>$record_count);
    }


    /**
     * OSS�ϴ������ļ�����
     * @param string $savename �ϴ����ļ�����
     * @param string $filepath �����ļ�·��
     * @return null
     */
    public function ossUpload($filepath, $savename)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];
        try {
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $result = $ossClient->uploadFile($bucket, $savename, $filepath);
        } catch (OssException $e) {
            print_r($e->getMessage() . "\n");
        }
        return $result;
    }

    /**
     * OSS�����ļ�����
     * @param string $object ��ʾ���������ļ�ʱ��Ҫָ�����ļ����ƣ���abc/efg/123.jpg��
     * @param string $localfile ָ���ļ�����·����
     * @return null
     */
    function ossDoewm($object, $localfile)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];
        $options = array(
            OssClient::OSS_FILE_DOWNLOAD => $localfile
        );
        try {
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $result = $ossClient->getObject($bucket, $object, $options);
        } catch (OssException $e) {
            print_r(__FUNCTION__ . ": FAILED\n");
            print_r($e->getMessage() . "\n");
        }
        return $result;

    }


    /**
     * OSSɾ���ļ�
     * @param string $object ɾ�����ļ���
     * @return null
     */
    function ossdelete($object)
    {
        $aliyunossconfig=$this->aliyunossconfig();
        $accessKeyId =$aliyunossconfig['oss_accessKey'];
        $accessKeySecret =$aliyunossconfig['oss_secretKey'];
        $endpoint = $aliyunossconfig['oss_domain'];
        $bucket = $aliyunossconfig['oss_bucket'];
        try {
            $ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
            $exist = $ossClient->doesObjectExist($bucket, $object);
            if($exist){   //�ж��Ƿ����
                $result = $ossClient->deleteObject($bucket, $object);
            }
        } catch (OssException $e) {
            print_r(__FUNCTION__ . ": FAILED\n");
            print_r($e->getMessage() . "\n");
        }
        return $result;

    }

    /**
     * OSSɾ���ļ���
     * @param string $object ɾ�����ļ���
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
                    if($exist){   //�ж��Ƿ����
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
     * OSSɾ������ļ�
     * @param string $object ɾ�����ļ���
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