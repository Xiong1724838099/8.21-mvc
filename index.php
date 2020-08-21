<?php
//超全局变量 $_SET $_GET $_POST $_REQUEST $_COOKE $_SESSION $_SERVER
// 用来记录一个口令
//应用文件夹   PHP常用的魔术常量  类魔术方法__get __set 全局魔术方法__autoload
//echo __DIR__; 程序目录
//echo __FILE__; 程序文件地址    //都是本地文件夹地址

//class  aa{
//    function  __construct()
//    {
//     echo  __CLASS__;
//    }
//}
//new aa();
//__CLASS__ 获取当前类的名字类名


//__METHOD__ 当前函数的名字
//__LINE__ 当前程序所在的行


//DIRECTORY_SEPARATOR 当前系统所用的斜杠

header("content-type:text/html;charset=utf-8");
define("MVC",true);
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR."application");//当前项目的目录
require_once "libs/start.php";
