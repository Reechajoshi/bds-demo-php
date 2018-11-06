<?php
include "conn.php";

$menu = $_POST['menu'];
for ($i = 0; $i < count($menu); $i++) {
mysql_query("UPDATE member SET sort_jury =". $i ." WHERE id=".$menu[$i]) or die(mysql_error());
echo "UPDATE member SET sort_jury = " . $i . " WHERE id=" . $menu[$i];
}
?>