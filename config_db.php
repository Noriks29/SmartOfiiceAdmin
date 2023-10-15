<?php

	function SQL_qq($strSQL,$mode = 0)
	{	
		$Link=mysqli_connect('localhost','root','admin','project1');
		if(!$Link)die('Нет подключения к БД!');
		@mysqli_query($Link,'SET NAMES utf8');
		if($mode == 0){
		$q=mysqli_query($Link, $strSQL);
		//print_r($q);
		while ($qq[]=mysqli_fetch_array($q,MYSQLI_ASSOC)){}
		return $qq;
		}
		else mysqli_query($Link, $strSQL);
         /* 
		//Для agniinfo
		$Link=mysql_connect('u464554.mysql.masterhost.ru','u464554','c_m4sSIOTi');
		if(!$Link)die('Нет подключения к БД!');
		@mysql_query('SET NAMES utf8');
		mysql_select_db('u464554');
		$q=mysql_query($strSQL);
		while ($qq[]=mysql_fetch_array($q,MYSQL_ASSOC)){}
*/
		

    	
	}

?>