<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();

$tasks = fetchAllTasks($pdo);

//dump($tasks[0]->description);

require 'PDO.view.php';

?>