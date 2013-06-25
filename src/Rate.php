<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:42
 * To change this template use File | Settings | File Templates.
 */

// TODO 別クラスじゃなくてCalcServiceに含めてしまうのも手だと思う
// 他からも参照することがあり得るならば別クラスだし、CalcServiceでしか参照しないのなら含めてもいい
class Rate {
    private $memberS = "S";
    private $memberA = "A";
    public function valueOf($member) {
        if($member->memberKind() === $this->memberA) {
            return 1;
        } else if ($member->memberKind() === $this->memberS) {
            return 0.5;
        } else {
            throw new Exception("bakana...");
        }
    }
}
