<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:55
 * To change this template use File | Settings | File Templates.
 */
/**
 * Class CalcService
 */
class CalcService
{
    private $rate;

    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param MemberInfo $memberInfo
     * @return int
     */
    public function calcCharge($memberInfo)
    {
        return intval($memberInfo->charge()) * $this->rate->valueOf($memberInfo);
    }
}
