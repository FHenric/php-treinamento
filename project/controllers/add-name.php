<?php

App::get('database')->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /Estudos/PHP/project/');

require 'views/add-name.view.php';