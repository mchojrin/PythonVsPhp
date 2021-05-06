<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if (mail('mauro.chojrin@leewayweb.com', 'Python Vs. PHP', $comment, "From: $name<$email>")) {
    ?>
    <h1>Message sent!</h1>
    <?php
} else {
    ?>
    <h1>Message not sent :(</h1>
    <?php
}