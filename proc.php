<?php
$l = $_POST["login"];
$p = $a = $_POST["password"];

include('cfg.php');
$result = mysqli_query("SELECT * FROM users WHERE (login='$1') AND (password='$p')");
if (mysqli_num_rows($result) > 0){
    echo "GOOD!"
}
else{
    echo "BYE BYE!"
}
?>