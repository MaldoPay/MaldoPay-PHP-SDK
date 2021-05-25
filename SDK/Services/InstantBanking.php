<?php
namespace MaldoPay\SDK\Services;

class InstantBanking extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2013;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 315;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}