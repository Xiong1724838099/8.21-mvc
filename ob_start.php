<?php
/*
 * 缓存的优化
 *
 * 缓冲区，给客户端返回的时候，用到缓冲区
 * php解析完内容先不给apache,把将要输出到客户端的内容，先暂存到缓冲区，等待所有的代码执行完或等待相关的指令，再输出给apache
 *
 *
 *
 * */
ob_start();//开启缓存区

echo "我是输出到客户端的内容";
$con = ob_get_contents();//获取即将要输出到客户端的静态内容

//ob_end_flush();//结束缓存区，并且输出到客户端
//不指定ob_end_flush();缓存区会在其他代码执行之后，输出
//只要放在缓存区的内容，就是已经经过php解析，并且返回给apache-》客户端的内容，静态页面（html,css/js）


//缓存区

header("content-type:text/html;charset=utg8");
