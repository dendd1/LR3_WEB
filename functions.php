<?php
	$top_4 = null;
    $array_info = parse_ini_file('config/parametrs.ini', true);
    $main_info = 'mysql:host='.$array_info['host'].';dbname='.$array_info['name'];
    $login = $array_info['login'];
    $password = $array_info['password'];
	function coonectDB_news()
	{
        global $main_info;
        global $login, $password;
		try 
		{
			$dbh = new PDO($main_info, $login,  $password);
		}
		 catch (PDOException $e) 
		{
			print "Has errors: " . $e->getMessage(); die();
		}
		$sth = $dbh->prepare("SELECT *, (SELECT COUNT(*) FROM comment_news WHERE comment_news.id_news = news.id_news) AS counts FROM news ORDER BY 'date' LIMIT 4");
		$sth->execute();
		$array = $sth->fetchAll(PDO::FETCH_ASSOC);
		global $top_4;
		$top_4 = $array;
		return ($array);			
	}
?>

