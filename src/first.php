<?php
require_once dirname(__FILE__) . "/CalcService.php";
$filePath = dirname(__FILE__) . "/sample.csv";
$service = new CalcService();
$service->showResult($filePath);
