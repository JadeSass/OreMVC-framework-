<?php

    /*
    * @ Default Providers Services Register
    * 
    * @ Include Custom Services in Providers Array
    * 
    */

    $providers = [
        'Redirect' => '../App/Providers/Redirect.php',
        'SessionMessage' => '../App/Providers/SessionMessage.php',
        'UserSession' => '../App/Providers/UserSession.php',
        'Protected' => '../App/Providers/ProtectedRedirect.php',
    ];

    require_once $providers['Redirect'];
    require_once $providers['SessionMessage'];
    require_once $providers['UserSession'];
    require_once $providers['Protected'];
    
?> 