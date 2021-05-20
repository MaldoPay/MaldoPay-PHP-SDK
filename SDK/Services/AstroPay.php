<?php
namespace MaldoPay\SDK\Services;

class AstroPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2005;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 206;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}