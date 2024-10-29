<?php

require 'vendor/autoload.php';
require 'core/Router.php';
require 'database/Connection.php';
require 'core/Request.php';
require 'core/helpers.php';
require 'config.php';

$config = require 'config.php';
App::bind('config', require 'config.php');
App::bind('query', Connection::make(App::get('config')));
$conn = Connection::make(App::get($config)['database']);




 Router::load('routes.php')->direct(Request::uri(), Request::method());
?>