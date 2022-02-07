<?php

class Post 
{   
    public $author;
    public $title;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;

        $this->author = $author;

        $this->published = $published;
    }

}

$posts = [
    new Post('My first Post', 'Leticia', true),

    new Post('My second Post', 'Filipe', false),

    new Post('My third Post', 'Leticia', false),

    new Post('My fourth Post', 'Filipe', true)
];

//array_filter(<meuArray>, função ou ação que sera repetida para cada unidade desse array)
$unpublishedPost = array_filter($posts, function($post){
    return $post->title;
});

//não será criado um array novo, apenas mostrará as unidades filtradas
$publishedPost = array_filter($posts, function($post){
    return $post->published;
});

// $modified = array_map(function ($post){
//     return 'foobar';
// }, $posts);

// foreach($posts as $post){
//     $post->published = false;
// }

$titles = array_map(function ($post){
    
        return (array) $post->title;

}, $posts);

//O que está acima pode ser reescrito de forma menos verbosa com o array_column($meuArray, 'propriedade do array')

$titless = array_column($posts, 'title');

//Lembrando que o array_column pega a key que está contida no inicio da classe e que compoe a sua construção

$authors = array_column($posts, 'author');

//Se eu quiser fazer um array associativo ficaria array_column($array, 'value', 'key')
$postByAuthor = array_column($posts, 'author', 'title');

$publishedTitles = array_map(function ($post){
    if($post->published){
        return $post->title;
    }
}, $posts);

var_dump($postByAuthor);