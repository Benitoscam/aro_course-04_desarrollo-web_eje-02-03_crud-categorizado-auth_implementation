<?php
$db = new PDO('sqlite:crud_categoria');
$r = $db->query("SELECT name FROM sqlite_master WHERE type='table'");
foreach ($r as $row) {
    echo $row['name'] . PHP_EOL;
}
