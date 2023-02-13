<?php
namespace MaldoPay\SDK\Services;

class Upi extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2177;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 311;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}
