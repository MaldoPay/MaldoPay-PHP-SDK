<?php
namespace MaldoPay\SDK\Services;

class EParaTRWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2040;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 222;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}