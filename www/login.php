<html>
    <head>
        <?php include "header.php"; ?>
    <head>
    <body>
        <div class="container">
            <div id="message">Success. Redirecting you to the index page...</div>
            <div id="message"></div>

            <form class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                      <label for="email" class="control-label col-sm-2">Email</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="email" placeholder="Enter your email address here..." required="" type="email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password" class="control-label col-sm-2">Password</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="password" placeholder="Enter your password here..." required="" type="password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="submit">Ready?</label>
                      <div class="text-left col-sm-10">
                        <button type="submit" id="submit" name="submit" class="btn btn-default" aria-label="Ready?">Let's go!</button>
                      </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <?php include "footer.php"; ?>
    </body>
</html>
