<?php

$users = $app['database']->selectAll('users');

$title= 'Home';

require 'views/index.view.php';