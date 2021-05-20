<?php
namespace MaldoPay\SDK\Services;

class CommunityBanking extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2034;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 216;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}