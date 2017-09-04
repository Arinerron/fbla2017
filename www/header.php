<?php
    include_once "../includes/functions.php";
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="FBLA 2017 - Job search website project">
<meta name="author" content="">
<title><?php echo htmlspecialchars(getTitle()); ?></title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="/css/animations.css" rel="stylesheet" />
<link href="/css/style.css" rel="stylesheet">
<link href="/css/styles.css" rel="stylesheet">

<div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="site-logo">
                        <a href="/" class="brand">openings.guide</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        &#x3C;/&#x3E;
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/">Home</a></li><!-- strtok($_SERVER["REQUEST_URI"],'?') to get current page -->
                            <li><a href="/about/">About</a></li>
                            <li><a href="/login/">Login</a></li>
                            <li><a href="/register/">Register</a></li>
                            <li><a href="/contact/">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
