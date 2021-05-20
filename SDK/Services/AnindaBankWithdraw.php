<?php
namespace MaldoPay\SDK\Services;

class AnindaBankWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2072;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2207200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}