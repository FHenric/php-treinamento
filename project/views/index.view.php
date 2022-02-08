<?php require('partials/head.php');?>

<?php require('partials/nav.php');?>

<h1>Submit Your Name</h1>

<form action="index.php/names" method="POST">

<input name='name'> </input>

<button type="submit">Submit!</button>

</form>

<h3>Your list:</h3>

<?php foreach($users as $user) :?>

    <li><?= $user->name;?> </li>

<?php endforeach; ?>

<?php require('partials/footer.php') ?>