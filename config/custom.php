<?php
/**
 * Created by PhpStorm.
 * User: konohanaruto
 * Date: 2017/3/26
 * Time: 11:07
 */

return array(
    // 静态文件服务器
    'staticServer' => 'http://image.xqw.test',
    'staticServerIntranet' => 'http://image.xqw.test/Intranet',
    // 淘宝ip地址库
    'ipTaobaoMap' => 'http://ip.taobao.com//service/getIpInfo.php?ip=',
    // 后台session名
    'intranetSessionName' => 'intranet',
    // 阿里云 sms
    'aliyunSMS' => array(
        'accessKeyId'    => env('ALIYUN_ACCESS_ID', ''),
        'accessKeySecret' => env('ALIYUN_ACCESS_SECRET', ''),
    ),
    
);
