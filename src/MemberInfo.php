<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:54
 * To change this template use File | Settings | File Templates.
 */
class MemberInfo{
    private $name;
    private $memberKind;
    private $charge;

    public function __construct($name, $kind, $charge) {
        $this->name = $name;
        $this->memberKind = $kind;
        $this->charge = $charge;
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
