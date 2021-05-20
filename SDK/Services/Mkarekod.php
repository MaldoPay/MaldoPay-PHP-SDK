<?php
namespace MaldoPay\SDK\Services;

class Mkarekod extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2051;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 229;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}