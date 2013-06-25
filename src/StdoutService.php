<?php
class StdoutService {
    private $calcService;

    public function __construct($calcService) {
        $this->calcService = $calcService;
    }

    public function write($memberInfos) {
        foreach ($memberInfos as $memberInfo) {
            echo $memberInfo->name() . "さんへの請求額は、" . $this->calcService->calcCharge($memberInfo) . "円です。" . PHP_EOL;
        }
    }
}
