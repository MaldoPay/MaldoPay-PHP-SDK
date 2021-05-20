<?php
namespace MaldoPay\SDK\Services;

class FaturaPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2066;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2206600;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}