<?php
namespace MaldoPay\SDK\Services;

class PiiUPayPapara extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2061;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2206100;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}