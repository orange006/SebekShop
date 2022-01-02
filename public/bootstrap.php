<?php
use core\Route;
use core\Errors;

spl_autoload_register(function ($name) {
    include ROOT."/../app/".$name.'.php';
});
try {
} catch (Exception $e) {
    Errors::handler("Route not found");
}

require_once ROOT.'/../core/database.php';
require_once ROOT.'/../core/errors.php';
require_once ROOT.'/../core/view.php';
require_once ROOT.'/../core/controller.php';
require_once ROOT.'/../core/route.php';
require_once ROOT.'/../core/web.php';
Route::start(); 
