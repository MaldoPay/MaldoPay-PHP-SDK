<?php
namespace MaldoPay\SDK\Services;

class PayKasa extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2001;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 203;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}