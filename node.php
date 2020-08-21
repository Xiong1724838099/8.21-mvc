<?php
//mvc 架构
//model  view controller
//用来记录一个口令
define("MVC",true);
//超全局变量
//应用文件夹
//魔术常量
//__DIR__能够获取当前程序运行的目录，在本地文件夹的地址
//__FILE__获取当前运行的程序文件 ，在本地文件地址
//__CLASS__ 获取当前类的名字
//__METHOD__  获取当前函数的名字
//__LINE__   当前程序所在行；
//DIRECTORY_SEPARATOR   在当前系统中所用下的斜杠 mac中的 /   windows中的\
define("APP_NAME",__DIR__);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--数据的增删改查
-
视图  数据  简单的工作方式
视图和数据混在一起开发
1.不能完成协同开发
2.工作量巨大，不能完成代码的复用
3.后期维护，工作量巨大。

model  view  controller

控制器将   模型和视图关联起来，指定什么样的数据显示在什么样的页面当中
    模型就是操作数据的方式（数据）  后台人员工作
    视图值的就是页面（前端人员）  页面的交互、页面的样式、页面的逻辑

    完美的实现前后台分离

    mvc优势
    1. 前后台分离
    2. 协同合作
    3. 将代码复用
    4. 降低后期维护的成本

    5. 单入口应用（方便关联，安全快捷）

    6. 可编辑的表格（多入口文件）
        1. 不安全
        2. 不方便管理

    多用paseInfo方式
-->
</body>
</html>

