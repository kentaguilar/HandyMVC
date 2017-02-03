<?php
require_once (ROOT . DS . 'config' . DS . 'config.php');

$url = isset($_GET['url']) ? $_GET['url'] : ROOT_ROUTE;

require_once (ROOT . DS . 'library' . DS . 'shared.php');
