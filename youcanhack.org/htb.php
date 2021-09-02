<?php

    $ifconfig = shell_exec('ifconfig');
    echo '<pre>' . $ifconfig . '</pre>';

?>

