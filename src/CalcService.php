<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:55
 * To change this template use File | Settings | File Templates.
 */
require_once __DIR__ . "/ChargeCalucrator.php";
require_once __DIR__ . "/MemberInfo.php";

/**
 * Class CalcService
 */
class CalcService
{
    private $calcrator;

    /**
     *
     */
    public function __construct()
    {
        $this->calcrator = new ChargeCalucrator();
    }

    /**
     * @param $filePath
     */
    public function showResult($filePath)
    {
        $memberInfoArray = $this->toMembers($filePath);
        foreach ($memberInfoArray as $memberInfo) {
            $this->printLine($memberInfo);
        }
    }

    /**
     * @param MemberInfo $memberInfo
     */
    private function printLine($memberInfo)
    {
        echo $memberInfo->name() . "さんへの請求額は、" . $this->calcrator->calcCharge($memberInfo) . "円です。" . PHP_EOL;
    }

    /**
     * @param $filePath
     * @return array
     */
    private function toMembers($filePath)
    {
        //ファイルのチェックはちょっとおいておこうか・・
        $file = fopen($filePath, "r");

        $users = array();
        while ($csvValues = fgetcsv($file)) {
            $users[] = new MemberInfo($csvValues);
        }
        @fclose($filePath);

        return $users;
    }
}