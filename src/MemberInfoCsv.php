<?php
require_once __DIR__ . "/MemberInfo.php";

abstract class MemberInfoCsv {
    # 公開レベルを絞っての定数はできないが、定数扱いにしたい意図を込めて大文字
    protected $NAME_INDEX = 0;
    protected $MEMBER_KIND_INDEX = 1;
    protected $CHARGE_INDEX = 2;

    protected function makeMemberInfo($csvValues) {
        return new MemberInfo(
                    $csvValues[$this->NAME_INDEX],
                    $csvValues[$this->MEMBER_KIND_INDEX],
                    $csvValues[$this->CHARGE_INDEX]);
    }
}
