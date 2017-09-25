<html>
    <head>
        <?php include "header.php"; ?>
    <head>

    <body class="top">
        <div class="container">
            <form class="form-horizontal">
                <br><br><center><h2>Login to your <?php echo htmlspecialchars(getTitle()); ?> account</h2></center><br>

                <div class="form-group">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <div id="message" class="hidden good">Success. Redirecting you to the index page...</div>
                    </div>
                </div>

                <fieldset>
                    <div class="form-group">
                      <label for="email" class="control-label col-sm-2">Email</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="email" placeholder="Enter your email address here..." required="" type="email" <?php $hasemail = (isset($_COOKIE['email'])); if($hasemail) echo 'value="' . htmlspecialchars($_COOKIE['email']) . '"'; else echo 'autofocus'; ?>>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="control-label col-sm-2">Password</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="password" placeholder="Enter your password here..." required="" type="password" <?php if($hasemail) echo 'autofocus'; ?>>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="submit">Ready?</label>
                      <div class="text-left col-sm-10">
                        <button type="button" onclick="login();" id="submit" name="submit" class="btn btn-default" aria-label="Ready?">Let's go!</button>
                      </div>
                    </div>
                </fieldset>

                <?php printCSRFToken(); ?>
            </form>
        </div>

        <?php include "footer.php"; ?>

        <script>
            function login() {
                var values = { "email": document.getElementById("email").value, "password": document.getElementById("password").value, csrf: "<?php echo getCSRFToken(); ?>"};

                var request = $.ajax({
                    type: 'POST',
                    url: "/api/v1/auth/login.php",
                    data: values,
                    dataType: "text",
                    success: function(response) {
                        var obj = JSON.parse(response);

                        if(obj.success) {
                            success();
                        } else {
                            error(obj.reason);
                        }
                    }
                });

                request.error(function() {
                    error("An unknown error occurred. Please contact support.");
                });
            }

            function error(reason) {
                var message = document.getElementById("message");
                message.className = "bad";
                message.innerHTML = reason; // this *shouldn't* be vulnerable to xss
            }

            function success() {
                var message = document.getElementById("message");
                message.className = "good";

                window.location = "/";
            }

            $("#idForm").submit(function(e) {
                login();
                e.preventDefault(); // avoid to execute the actual submit of the form.
            });
        </script>
    </body>
</html>
