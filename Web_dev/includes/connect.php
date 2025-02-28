<?php

$con = mysqli_connect('localhost', 'root', '', 'gadgetcart');

if (!$con) {
    die(mysqli_error($con));
}
?>