<?php
namespace MaldoPay\SDK\Services;

class PiiUPayPaparaQR extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2092;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2209200;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}