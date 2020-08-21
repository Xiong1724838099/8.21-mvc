<?php
class index{
    function int(){
        $en = new engine();

        $en->setTemplateDir(TPL_PATH);
        $en->setCompileDir(COMPILE_PATH);
        $en->setCacheDir(CACHE_PATH);
        $en->cache=true;
        //php如何操作数据库

        //1. 过程化的  废弃
        //2. 对象的方式访问
        //3. pdo的方式  数据迁移更简单一些
        $db = @new mysqli("localhost","root","gzx123456","wui2006","3308");
        if(mysqli_connect_error()){
            die("连接数据库出错");
        }

        //对数据库进行查询
        $db->query("set names utf8");
        $result = $db->query("select * from demo");

        //3. 如何将数据从结果里面取出来
        $data=array();
        while ($row=$result->fetch_assoc()){
//            print_r($row);
            $data[]=($row);
        }

        $en->assign("data",$data);
        $en->display("index.html");
    }
}