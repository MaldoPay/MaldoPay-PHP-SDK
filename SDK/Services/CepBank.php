<?php
namespace MaldoPay\SDK\Services;

class CepBank extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2002;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 201;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}