<?php
namespace MaldoPay\SDK\Services;

class MFTDeposit extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2093;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 22093;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}