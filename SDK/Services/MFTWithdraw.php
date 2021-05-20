<?php
namespace MaldoPay\SDK\Services;

class MFTWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2095;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 22095;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}