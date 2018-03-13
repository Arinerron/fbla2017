<?php

/* MAIN CONFIGURATION */
define("NAME", "discoverjobs.info"); // The name of the site
define("SITE", "discoverjobs.info"); // the public-facing domain or IP address, if any
define("HTTPS", true); // enable if host is using https protocol rather than http
define("SECURE", true); // FOR DEVELOPMENT ONLY! Set to false for development mode

/* DATABASE CONFIGURATION */
define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "asdfasdf");
define("DATABASE_NAME", "fbla");

/* LOGIN AND REGISTRATION CONFIGURATION */
define("CAN_LOGIN", true);
define("CAN_REGISTER", true);
define("DEFAULT_ROLE", "member");
define("RECAPTCHA_KEY", "");
define("MAX_LOGIN_ATTEMPTS", 20);
define("LOGIN_ATTEMPT_TIMEOUT", 2); // in hours

/* COOKIE CONFIGURATION */
define("SESSION_ID_NAME", NAME . "_session");

/* MISC CONFIGURATION */
define("EASTER_EGGS", true);

?>
