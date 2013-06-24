<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:54
 * To change this template use File | Settings | File Templates.
 */
require_once __DIR__ . "/Constants.php";
class MemberInfo{
    private $name;
    private $memberKind;
    private $charge;

    public function __construct($line) {
        $this->name = $line[Constants::nameIndex()];
        $this->memberKind = $line[Constants::memberKindIndex()];
        $this->charge = $line[Constants::chargeIndex()];
    }

    public function name(){
        return $this->name;
    }

    public function memberKind(){
        return $this->memberKind;
    }

    public function charge(){
        return $this->charge;
    }
}