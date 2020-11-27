<?php
header('Content-type: text/json; charset=utf-8');
$allowOrigin = 'http://site-c';
header("Access-Control-Allow-Origin: ${allowOrigin}");
$resp = array('HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT']);
sleep(2);
echo json_encode($resp);
exit;
