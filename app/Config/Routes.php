<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/view', 'shopController::view');
$routes->get('/about', 'shopController::about');
$routes->get('/perfumes', 'shopController::perfumes');
$routes->get('/shop', 'shopController::shop');
$routes->get('/contact', 'shopController::contact');
$routes->get('/register', 'adminController::register');
$routes->get('/signup', 'adminController::signUp');
$routes->get('/signin', 'adminController::signIn');