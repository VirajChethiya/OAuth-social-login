<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
  'app_id' => '548137255616202',
  'app_secret' => '683410b8e4200fe3fd274d68b63a47da',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $FB->getRedirectLoginHelper();

?>