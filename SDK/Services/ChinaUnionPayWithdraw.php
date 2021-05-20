<?php
namespace MaldoPay\SDK\Services;

class ChinaUnionPayWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2085;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 2208500;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}