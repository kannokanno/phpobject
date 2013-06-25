<?php
require_once __DIR__ . "/MemberInfoCsvFile.php";

class MemberInfoCsvFileReader extends MemberInfoCsvFile {
    /**
     * @return array[MemberInfo]
     */
    public function read() {
        //ファイルのチェックはちょっとおいておこうか・・
        $file = fopen($this->filePath, "r");

        $users = array();
        while ($csvValues = fgetcsv($file)) {
            $users[] = $this->makeMemberInfo($csvValues);
        }
        @fclose($filePath);

        return $users;
    }
}
