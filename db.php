<?php
	session_start(); # 세션 시작
	header('Content-Type: text/html; charset=utf-8'); # 인코딩 형식 : UTF-8

	$db = new mysqli("localhost","root","","customspace");
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>