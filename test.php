<?php

$hello = 'world';
$result = shell_exec('pgthon.py ' . $hello);
echo " $result";
?>