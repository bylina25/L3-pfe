<?php
require_once 'config/db.php';
$sql ="select id,password ,role from UTILISATEUR" WHERE ID=?;
$stmt =$pdo ->prepare($sql);
$id=220506;
$stmt->execute([$id]);
$UTILISATEUR=$stmt->fetch(PDO::FETCH_ASSOC);
?>