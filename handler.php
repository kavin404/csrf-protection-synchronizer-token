
<?php
require_once 'token_manager.php';

// Authentication code 
if(isset($_POST['username'], $_POST['password'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    /***
     * WARNING : User credentials are hardcoded for demonstration purposes only
     * Never Hardcode credentials
     ***/

    if($username == 'admin' && $password == 'admin@123'){
        /***
         * A SessionID is created
         * Now the server can keep track of the logged in user
         * We store the sessionId as a cookie called Session Cookie 
         * Each time the user do some action this session cookie would be sent to the server
         * Since its path is / 
         */
		$sessionIdentifier = base64_encode(openssl_random_pseudo_bytes(32));
        setcookie("sessionID", $sessionIdentifier,0,"/");

        TokenManager::generateToken($sessionIdentifier);

        header('Location:demo_action.php');
    } else {
        header('Location:index.php');
    }
}