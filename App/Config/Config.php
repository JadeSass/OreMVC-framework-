<?php
    /*
    *
    * @CONST
    * Site structure & Credentials
    * These are defined constant available in the application.
    * Ther ROOT constant is the initial application path taking two steps back to the application
    * @URL
    * Predefined url for the application, go ahead and change to your working environment.
    * Note: If you are working in the live environment, change the URL to the live url.
    *
    * Enjoy working!!!
    *
    *
     */

    define("ROOT", dirname(dirname(__FILE__)));
    define("URL", "http://localhost/OreMVC");
    define("APP_NAME", "OreMVC");
    define("APP_VERSION", "0.1.0");

    /*
    *
    * @CONST
    * Database structure & Credentials
    * @DB_HOST
    * Change the host server if you are working in a different system environment.
    *
    * Keep the work going!!!
    */

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "omvc");
?>