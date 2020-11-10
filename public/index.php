<?php
/**
 * Created by PhpStorm.
 * User: hamidreza
 * Date: 4/1/20
 * Time: 6:44 PM
 */


define('BASE_PATH',dirname(__DIR__));
define('DATA_DIR',BASE_PATH.'/data');
define('TPL_DIR',BASE_PATH.'/template');
define('COMPILE_DIR',BASE_PATH.'/compile');
define('CACHE_DIR',BASE_PATH.'/cache');

require BASE_PATH.'/vendor/autoload.php';


$smarty = new Smarty();

$smarty->setTemplateDir(TPL_DIR);
$smarty->setCompileDir(COMPILE_DIR);
$smarty->setCacheDir(CACHE_DIR);


//routing
$uri = $_SERVER['REQUEST_URI'];
$page = 'home';

switch ($uri){
    case '/news':
        $page = 'news';
        break;
    case '/service':
        $page = 'service';
        break;
    case '/CU':
        $page = 'CU';
        break;
    case '/RT':
        $page = 'RT';
        break;
    case '/Archive':
        $page = 'Archive';
        break;
    case '/Weather':
        $page = 'Weather';
        break;
    default:
        break;
}

$path = DATA_DIR.'/'.$page;
$dataArray = scandir($path);
$files = array_diff($dataArray, array('.', '..'));

foreach ($files as $file){
    $smarty->assign(explode('.',$file)[0], json_decode(file_get_contents($path.'/'.$file),true));
}


$smarty->display($page.'.tpl');