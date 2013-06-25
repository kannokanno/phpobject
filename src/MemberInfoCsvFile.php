<?php
require_once __DIR__ . "/MemberInfoCsv.php";

abstract class MemberInfoCsvFile extends MemberInfoCsv {
    protected $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }
}
