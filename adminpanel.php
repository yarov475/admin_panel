<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
    header('Location: adminavt.php');
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Страница</title>
        <meta charset="utf-8">
    </head>
    <body>
    <h2>Изображение.</h2>
    <form method="post"action="getdata.php" enctype="multipart/form-data">
        <input type="file" name= "image">
        <button type="submit">загрузить</button>
    </form>
    <h2> Текст. </h2>
    <form method="POST"action="getdata.php"enctype="multipart/form-data">
    <inputtype="file"name="myimage">
    <inputtype="submit"name="submit_image"value="Upload">
    </form>
    <form action="newart.php" method="post">
        <p>Название статьи:</p>
        <input name="nameart">
        <p>Текст статьи:</p>
        <textarea name="text"></textarea>
        <p>Текст ссылки в меню:</p>
        <input name="menu">
        <input type="submit" value="Добавить статью">
    </form>
    <script>
        var form = document.querySelector('form');
        form.onsubmit = function ()
        {
            var text = form.text;
            text.value = '<p>' + text.value + '</p>';
            text.value = text.value.replace(/\n/g, '</p><p>');
        };
    </script>
    </body>
    </html>
