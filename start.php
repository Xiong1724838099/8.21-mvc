<?php
header("content-type:text/html;charset=utf-8");
if(!defined("MVC")){
die("访问路径不合法");
}

//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件的路径
define("ENTRY_PATH",$_SERVER["SCRIPT_FILENAME"]);
//框架所在路径
define("MAIN_PATH",dirname(ENTRY_PATH).DIRECTORY_SEPARATOR);
//核心库所在路径
define("LIBS_PATH",MAIN_PATH."libs".DIRECTORY_SEPARATOR);
//插件所在路径
define("PLU_PATH",MAIN_PATH."plugins".DIRECTORY_SEPARATOR);
// 文件在本地的路径
//模板所在路径
define("TPL_PATH",APP_NAME.DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR);


//http协议访问的路径
// 主机地址
define("HOST_ADD","https://".$_SERVER["HTTP_HOST"]);
//单入口文件
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);
//框架地址
define("MAIN_ADD",dirname(ENTRY_ADD).DIRECTORY_SEPARATOR);
//当前应用地址
define("APP_ADD",MAIN_ADD.APP_DIR_NAME.DIRECTORY_SEPARATOR);
//静态文件地址
define("STATIC_ADD",APP_ADD."static".DIRECTORY_SEPARATOR);
//css文件地址
define("CSS_ADD",STATIC_ADD."css".DIRECTORY_SEPARATOR);
//js 文件地址
define("JS_ADD",STATIC_ADD."js".DIRECTORY_SEPARATOR);
//img地址
define("IMG_ADD",STATIC_ADD."img".DIRECTORY_SEPARATOR);
//font地址
define("FONT_ADD",STATIC_ADD."font".DIRECTORY_SEPARATOR);

//路由的概念
// M 数据 V视图  C控制器
//vue  MVVM架构
include_once LIBS_PATH."engine.class.php";
include_once LIBS_PATH."route.class.php";
$route=new  \libs\route();
$route->run();
