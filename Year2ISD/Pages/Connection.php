<?php

session_start();

$hostname = "andrewdunkerswebpage.co.uk.mysql";

$username = "andrewdunkerswe";

$password = 'XZXvNn5W';

$databaseName = "andrewdunkerswe";

$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");


?>