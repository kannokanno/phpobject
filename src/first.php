<?php
require_once __DIR__ . "/MemberInfoCsvFileReader.php";
require_once __DIR__ . "/Rate.php";
require_once dirname(__FILE__) . "/CalcService.php";
require_once dirname(__FILE__) . "/StdoutService.php";

$filePath = dirname(__FILE__) . "/sample.csv";
$reader = new MemberInfoCsvFileReader($filePath);

$service = new StdoutService(new CalcService(new Rate()));
$service->write($reader->read());
