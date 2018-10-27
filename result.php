<?php
    require_once 'token_manager.php';

    if (isset($_POST['resource_name']) && isset($_POST['csrfToken'])) {
        $resource = $_POST['resource_name'];
        $valid_request = false;
        echo TokenManager::getTokenBySession($_COOKIE['sessionID']).'<br>';
        echo 'CSRF token = '.$_POST['csrfToken'];
        if ( TokenManager::getTokenBySession($_COOKIE['sessionID']) == $_POST['csrfToken']) {
            $valid_request = true;
        }
      
    }
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>
<body>

    <?php include 'common.php';?>
	<div class="container">
		<div class="row">
            <?php
                if ($valid_request) {
                    echo '<p> Successfully Deleted </p>';
                } else {
                    echo '<p> Failed to delete resource </p>';
                }
            ?>
		</div>
	</div>

</body>

</html>