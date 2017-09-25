<?php
    include_once "../includes/functions.php";
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="FBLA 2017 - Job search website project">
<meta name="author" content="">
<title><?php echo htmlspecialchars(getTitle()); ?></title>

<link href="/css/skeleton.min.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">

<div id="fixed" style="width: 100%; background-color: white;z-index:99;">
    <div id="navbar">
        <nav class="container">
            <a class="brand"><?php echo htmlspecialchars(getTitle()); ?></a>
            <ul>
                <li class="active"><a href="/">Home</a></li><!-- strtok($_SERVER["REQUEST_URI"],'?') to get current page -->
                <li><a href="/about/">About</a></li>
                <li><a href="/login/">Login</a></li>
                <li><a href="/register/">Register</a></li>
                <li><a href="/contact/">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<br><br>
