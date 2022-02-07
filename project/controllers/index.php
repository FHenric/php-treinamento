<?php

$tasks = $app['database']->selectAll('todos');

$title= 'Home';

require 'views/index.view.php';