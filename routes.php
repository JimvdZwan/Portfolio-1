<?php
$router->define([
    '' => 'PagesController@home',
    'about'=>'controllers/about.php',
    'student' => 'controllers/student.php',
    'project'=>'controllers/project.php',
    'courses'=>'controllers/courses.php',
    
]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('project', 'ProjectController@home');
$router->get('contact', 'PagesController@contact');

$router->post('add-project', 'ProjectController@add');
$router->post('del-project', 'ProjectController@delete');
$router->post('upd-project', 'ProjectController@update');
$router->post('store-project', 'ProjectController@store');

?>
