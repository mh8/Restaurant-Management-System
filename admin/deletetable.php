<?php
$mysqli = new mysqli('localhost', 'root', '', 'wdpf47_rms') or die('error');

$id = $_REQUEST['id'];
    $sql = "DELETE FROM tables WHERE id = '$id'";
    $mysqli->query($sql);
    if($mysqli->affected_rows){
            header("location:managetables.php");
        }
?>  