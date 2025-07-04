<?php

use Nano\Http\Request;

require "../vendor/autoload.php";

/** @var \Nano\Foundation\Application */
$app = require base_path()."/bootstrap/app.php";

$app->handleRequest(Request::capture());