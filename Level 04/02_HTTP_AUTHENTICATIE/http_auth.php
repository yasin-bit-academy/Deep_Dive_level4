<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else if($_SERVER["PHP_AUTH_USER"] === "herman" && $_SERVER["PHP_AUTH_PW"] === "mylittlepony" ){
    echo "Van hartelijk welkom " . $_SERVER["PHP_AUTH_USER"];
    exit;
}else{
    echo "THOU HAST NO AUTHORITY TO BE HERE";
    exit;
}

?>