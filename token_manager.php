<?php

class TokenManager
{
    
    public static function generateToken($sessionID)
    {
        echo 'Generated';

        $_SESSION['sessionID'] = $sessionID;
        $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
        $_SESSION['tokenArr'] = array($sessionID => $_SESSION['token']);
        echo 'Token Arr '.$_SESSION['tokenArr'][$sessionID];
        return  $_SESSION['token'];
    }

    public static function getTokenBySession($sessionID)
    {
        echo 'The token array '. $_SESSION['tokenArr'][$sessionID];
        return $_SESSION['tokenArr'][$sessionID];
    }

  
}
?>