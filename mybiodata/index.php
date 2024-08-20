<?php 
    require "fillable.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio | <?=$name?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    
<main>
    <div id="bio-container">
        <div id="my-image">
            <img src="Quality-removebg-preview-removebg-preview_2-removebg-preview.png" height="250px">
        </div>
        <div id="my-data">
            <h1>Hello there, i'm <?=$firstname?></h1>
            <p><?=$about_me_data?></p>

            <h2>Hobbies</h2>
            <ul>
            <?php foreach(HOBBIES as $hobby):?>
                <li><?=$hobby?></li>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
</main>
</body>
</html>