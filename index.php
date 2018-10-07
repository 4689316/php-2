<meta> 

<?php
require_once("engine/functions.php");
require_once ('twig/Autoloader.php');

Twig_Autoloader::register();
$loader = new Twig_loader_FileSystem('pages');
$twig = new Twig_Environment($loader);

// Навигация по страницам
$url_array = explode("/", $_SERVER['REQUEST_URI']);
/*echo "<pre>";
print_r($url_array);
echo "</pre>";
*/

// Получение содержимого страницы
$page = page_switcher($url_array);



//print_r($page['content']);

// Вывод страницы через шаблоны Twig
$template = $twig->LoadTemplate($page['path']);
// print_r($page['content']);
echo $template->render(array('content' => $page['content']));
// include page_switcher($url_array);





?>