<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:43
 * To change this template use File | Settings | File Templates.
 */
require_once __DIR__ . "/RateManager.php";
class ChargeCalucrator
{
    private $rateManager;

    public function __construct()
    {
        $this->rateManager = new RateManager();
    }

    /**
     * @param MemberInfo $userInfo
     * @return int
     */
    public function calcCharge($userInfo)
    {
        return intval($userInfo->charge()) * $this->rate($userInfo->memberKind());
    }

    /**
     * @param MemberInfo $memberKind
     * @return float|int
     */
    private function rate($memberKind)
    {
        return $this->rateManager->valueOfRate($memberKind);
    }
}
