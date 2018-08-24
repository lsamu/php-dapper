<?php
include ('../src/dapper.php');
$pdo = PDOHelper::mysql("localhost","root","root","mysql");

$db = new Dapper($pdo);

$list = $db->query("select * from user");

foreach($list as $row){
    echo($row["Host"]);
}

$pdo = PDOHelper::sqlserver("192.168.3.18","sa","xz","qimiao");
$db = new Dapper($pdo);

$list = $db->query("select * from t_vpn_user");

foreach($list as $row){
    echo($row["title"]);
}
?>