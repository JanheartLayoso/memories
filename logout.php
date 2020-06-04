<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    
    echo 'You have cleaned session. Come back again!';
    header('Refresh: 2; URL = index.html');
?>