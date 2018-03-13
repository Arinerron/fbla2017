<html>
    <head>
        <?php include_once "header.php"; ?>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <div id="front" class="bgimg-1">

            <div class="caption" id="main" style="background: none; padding: 0;">
                <div style="padding-bottom: 2%; background-color: rgba(255, 255, 255, 0.5); padding-top: 0.25%; width: 350px; margin: 0 auto;">
                    <h3 class="main" style="text-align:center;" style="color: #000 !important;"><?php $greetings = array('Welcome', 'Greetings', 'Welcome'); echo $greetings[array_rand($greetings)]; ?></h3>
                    <p>Find jobs <?php
                        $adverbs = array('instantly', 'today', 'now');
                        $details = getDetailsIP((isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']));
                        if(isset($details['city']))
                            echo 'in <b>' . htmlspecialchars($details['city']) . '</b> ';
                        echo htmlspecialchars($adverbs[array_rand($adverbs)]);
                    ?></p>
                    <br>
                    <div class="search" style=""><form action="/search.php" method="GET"><input type="text" name="title" placeholder="Enter in a job title..." style=""><input style="margin-top: 0%; font-family: 'Bungee', cursive;" type="submit" class="submit" value="▶"></form></div>
                </div>
            </div>

        </div>
        <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
            <div class="container contentpanel">
                <h3 style="text-align:center;"><b><div id="count"><?php echo '1337'; /*$users = getUsers(); echo sizeof($users);*/ ?></div> people have used <?php echo htmlspecialchars(getTitle()); ?> to find the perfect job</b></h3>
                <p>more random stuff</p>
            </div>
        </div>
        <div class="bgimg-2">
            <div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">idk</span>
            </div>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
                <div class="container contentpanel">
                    <p>wow</p>
                </div>
            </div>
        </div>
        <div class="bgimg-3">
            <div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">rip</span>
            </div>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align:justify;">
                <div class="container contentpanel">
                    <p>lol</p>
                </div>
            </div>
        </div>
        <?php include_once "footer.php"; ?>
        <script>
            $(function(){
                $(window).scroll(function() {
                    if(window.location.pathname === "/" || window.location.pathname === "/index.php" || window.location.pathname === "/index/" || window.location.pathname === "/index") {
                        var scroll = $(window).scrollTop();
                        var os = $('#front').offset().top;
                        var ht = $('#front').height();

                        if(scroll > os + ht) {
                            $("#navbar").fadeOut(100);
                        } else {
                            $("#navbar").fadeIn(100);
                        }
                    }
                });
            });

            var target = -1;
            var i = 0;
            var current = 0;
            var time = 3000;
            var frames = 60;
            setInterval(function() {
                if(target == -1)
                    target = parseInt(document.getElementById("count").innerHTML);
                else {
                    if(i < frames) {
                        current += target / frames;
                        document.getElementById("count").innerHTML = Math.round(current);
                        i++;
                    }
                }
            }, time / frames);
        </script>
    </body>
</html>
