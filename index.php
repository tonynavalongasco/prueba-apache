<?php
$uri = explode('/',$_SERVER['REQUEST_URI']);
if($uri[1] == 'hola'){
echo 'Hola mundo';
}