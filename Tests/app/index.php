<?php

$loader = require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/AppKernel.php';
var_dump('___________we are here!!!!!!!!!!');die;
use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);