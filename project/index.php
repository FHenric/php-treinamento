<?php

$database = require 'core/bootstrap.php';
// die(var_dump(trim($_SERVER['REQUEST_URI'], '/')));


require Router::load('routes.php')

    ->direct(Request::uri(), Request::method());
