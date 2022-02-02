<?php 

$tasks = [
    'task 1' => [
        'title' => 'Take the trash out',
        'due' => '06:00 PM',
        'assigned_to' => 'Filipe',
        'checked' => true
    ],
    'task 2' => [
        'title' => 'Wash dishes ',
        'due' => '07:00 PM',
        'assigned_to' => 'Leticia',
        'checked' => false
    ],
    'task 3' => [
        'title' => 'Clean the bedroom',
        'due' => '08:00 PM',
        'assigned_to' => 'Miguel',
        'checked' => true
    ],
    'task 4' => [
        'title' => 'Sweep the house',
        'due' => '09:00 PM',
        'assigned_to' => 'Filipe',
        'checked' => false
]
];
// foreach($tasks as $task => $desc) {
//     echo $desc['title'];
// };
// var_dump($desc['title']);

require 'homework03.view.php'
?>
