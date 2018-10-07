<?php 

define('db', 'dz_5', 0);
define('host', 'localhost', 0); 
define('user', 'root', 0);
define('password', '', 0);


// Вывод контента страницы в зависимости от URL
function page_switcher($url_array) {

	if ($url_array[1]=="") {

		$page['path'] = "main.html";
	}

	elseif (!isset($url_array[2]) || $url_array[2]=="") {
		switch ($url_array[1]) {
			case "catalog":
			$page['path'] = "catalog.php";
			$sql = 'select * from foto_list';
			$page['content'] = bd_arr_query($sql);
			break;
			
			default:
			$page['path'] = "404.php";
			break;
		}
	}

	elseif (!isset($url_array[3]) || $url_array[3]=="") {
		if ($url_array[1]=='catalog') {
			$page['path'] = "foto_page.html";
			$sql = "select * from foto_list where good_id = $url_array[2]";
			$page['content'] = bd_arr_query($sql)['0'];;
			$cur_views = $page['content']['views']+1;
			$sql2 = "update foto_list set views = $cur_views where good_id = $url_array[2]";
			$upd = bd_simple($sql2);

		} else {
			$page['path'] = "404.php";
		}
	}

	else {
		$page['path'] = "404.php";
	}

	return $page;
}

// Получение списка всех фотографий и данный по ним
function bd_arr_query($sql) {
	$link = mysqli_connect(host, user, password, db);
	$result = mysqli_query($link, $sql);
	//print_r($result); echo "<br>";
	
	while ($row=mysqli_fetch_assoc($result)) {
		$arr_result[]=$row;
	}
	//print_r($arr_result);
	mysqli_close($link);
	return $arr_result;
	
}

function bd_simple($sql) {
	$link = mysqli_connect(host, user, password, db);
	$result = mysqli_query($link, $sql);
	mysqli_close($link);
	return $result;
	
}


// Выполнение запроса к ДБ


?>

