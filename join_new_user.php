<?php

$connection = new mysqli ("localhost", "root", "", "online_store_db");
$sqlCommand = $connection->prepare("insert into app_users_table values(?,?,?)");
$sqlCommand->bind_param("sss", $_GET["email"],$_GET["username"],$_GET["pass"]);
$sqlCommand->execute();
