<?php
namespace MaldoPay\SDK\Services;

class AnindaPapara extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2044;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 250;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}