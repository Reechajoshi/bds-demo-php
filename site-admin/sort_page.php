<?php
include "conn.php";

$menu = $_POST['menu'];
for ($i = 0; $i < count($menu); $i++) {
mysql_query("UPDATE pages SET page_sort =". $i ." WHERE pageid=".$menu[$i]) or die(mysql_error());
echo "UPDATE pages SET page_sort = " . $i . " WHERE pageid=" . $menu[$i];
}
?>