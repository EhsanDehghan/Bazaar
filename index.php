<?php

echo 'We are in index page!' . '<br>';

echo $_GET['url'] . '<br>';

$url = explode('/' , $_GET['url']);
print_r($url);





?>
