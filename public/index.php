<?php 
require_once('../vendor/autoload.php');
require_once('../app/functions/functions.php');

(new \app\core\RouterCore());
use app\controller\TesteController;

$controller = new TesteController();

?>
