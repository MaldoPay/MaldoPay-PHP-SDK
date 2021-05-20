<?php
namespace MaldoPay\SDK\Services;

class EParaTR extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2038;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 220;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}