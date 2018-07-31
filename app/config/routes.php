<?php 

$router->add('GET', '/', function () {
	return 'Esta na homepage';
});

$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersController::show');
