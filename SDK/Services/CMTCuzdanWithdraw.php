<?php
namespace MaldoPay\SDK\Services;

class CMTCuzdanWithdraw extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2071;
    const TYPE = "WITHDRAW";
    const SUCCESS_CODEID = 217;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}