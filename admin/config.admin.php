<?php
require_once('sqlin.php');
$conf['debug']['level']=5;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=localhost;dbname=boesdnh8y6f';
$conf['host']='localhost';
$conf['port']='3306';
$conf['db']['user']='root';
$conf['db']['password']='!@#$%^&*())(*&^%$#@!';
$conf['db']['charset']='utf8';
$conf['db']['prename']='ssc_';

$conf['safepass']='123123';     //后台登陆安全码

$conf['cache']['expire']=0;
$conf['cache']['dir']='_cache_$98sdf29@fw!d#s4fef/';
$conf['url_modal']=2;
$conf['action']['template']='wjinc/admin/';
$conf['action']['modals']='wjaction/admin/';
$conf['member']['sessionTime']=30*60;	// 用户有效时长
$conf['node']['access']='http://localhost:65531';	// node访问基本路径

error_reporting(E_ERROR & ~E_NOTICE);
ini_set('date.timezone', 'asia/shanghai');
ini_set('display_errors', 'Off');