<?php
namespace MaldoPay\SDK\Services;

class PaparaPay extends \MaldoPay\SDK\Service
{
    const SERVICE_ID = 2059;
    const TYPE = "DEPOSIT";
    const SUCCESS_CODEID = 2205900;

    public function __construct()
    {
        parent::__construct(self::SERVICE_ID, self::TYPE, self::SUCCESS_CODEID);
    }
}