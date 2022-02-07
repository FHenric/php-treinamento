<?php 

$router -> define([
    'project/index.php' => 'controllers/index.php',
    'project/index.php/about' => 'controllers/about.php',
    'project/index.php/about/culture' => 'controllers/about-culture.php',
    'project/index.php/contact' => 'controllers/contact.php' 
]);