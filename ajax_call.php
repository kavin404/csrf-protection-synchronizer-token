<?php 

    session_start();
    require_once 'token_manager.php';

    $sessionID = $_COOKIE['sessionID'];

    $csrfToken = TokenManager::getTokenBySession($sessionID);
    
    echo 'The csrf token === '.$csrfToken;
    echo json_encode(array("token" => $csrfToken));
    

?>