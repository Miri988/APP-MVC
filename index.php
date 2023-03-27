<?php

require_once('./vendor/autoload.php');
require_once('.' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'parameters.php');

use App\Mvc\Component\Router;
use App\Mvc\Component\Database;
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->load(ROOT_DIR . DIRECTORY_SEPARATOR . '.env'); // $_ENV

Database::initConnection();

$router = new Router(include(ROUTES_CONFIG));
$router->run();

?>
