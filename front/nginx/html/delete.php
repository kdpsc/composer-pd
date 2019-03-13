<?php

header("Refresh:3;url=index.html");

$id = $_POST["id"];
$delete=`curl -i "Accept: application/json" -X DELETE http://backend:8888/notes/$id`;

echo 'Ok';