<?php
include("../includes/session.php");
if(!$session->logged_in){
header("location:/");
exit();
}

$id = $_POST['id'];
$content = mysql_real_escape_string($_POST['content']);

$q = "UPDATE " . TBL_BOOKS_WIDGETS . " SET content2='$content' WHERE id='$id'";
$result = mysql_query($q, $database->connection);

echo 'true';
?>