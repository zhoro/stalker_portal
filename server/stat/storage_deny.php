<?php
/*
    online, offline
*/
include "../lib/func.php";

$db = new Database();
$in_param = $_GET['in_param'];

$sql = "select * from storage_deny where name='$in_param'";
$rs=$db->executeQuery($sql);
$counter = @$rs->getValueByName(0, 'counter');

$sql = "update storage_deny set counter=0 where name='$in_param'";
$db->executeQuery($sql);

echo $counter;
?>