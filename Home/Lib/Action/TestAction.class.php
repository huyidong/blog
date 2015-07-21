<?php
class TestAction extends CommonAction{
	public function index(){
$connection = new Mongo();
print_r($connection->listDBs());//能打印出数据库数组，看看有几个数据库。
}
}
?>