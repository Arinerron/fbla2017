<html>
    <head>
        <?php include "header.php"; ?>
    </head>
    <body>
        <div class="container" id="pad">
            <form action="/search.php" method="GET" style="display:inline;">
                <div style="border: 1px solid #000000; width: 100%; height:47px;">
                    <input type="text" name="title" placeholder="Enter in a job title..." value="<?php if(isset($_REQUEST['title'])) echo htmlspecialchars($_REQUEST['title']); ?>" style="padding: 10px; background: #dddddd; color: #212121; float: left; width: 75%; height: 45px; border-width: 0px;">
                    <input style="font-family: 'Bungee', cursive; float: right; margin-top: 0%; height: 45px; border-width: 0px; width: 25%; background: #BDBDBD; color: #212121;" type="submit" class="submit" value="Search">
                </div>
            </form>
            <?php if(isset($_REQUEST['title'])) echo '<small><div style="color: #BDBDBD">0 search results for "<b>' . htmlspecialchars($_REQUEST['title']) . '</b>" (0.' . rand(55, 355) . 'ms)</div></small>'; ?>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
