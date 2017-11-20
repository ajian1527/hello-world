<?php
//连接数据库
$link=mysql_connect('localtion:3306','root','123456');
//选择默认数据库
mysql_query('use itcast');
//创建sql语句
$sql="select * from test";
//获取资源结果集
$result=mysql_query($sql);//得到资源结果集
$row=mysql_fetch_assoc($result);//得到数组信息
