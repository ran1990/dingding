<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.finance.alipay.account.getbyuid request
 *
 * @author auto create
 * @since 1.0, 2021.10.20
 */
class OapiFinanceAlipayAccountGetbyuidRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.finance.alipay.account.getbyuid";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
