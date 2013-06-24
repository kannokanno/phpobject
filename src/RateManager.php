<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:42
 * To change this template use File | Settings | File Templates.
 */
class RateManager {
    private $memberS = "S";
    private $memberA = "A";
    public function valueOfRate($memberKind) {
        if($memberKind === $this->memberA) {
            return 1;
        } else if ($memberKind === $this->memberS) {
            return 0.5;
        } else {
            throw new Exception("bakana...");
        }
    }
}
