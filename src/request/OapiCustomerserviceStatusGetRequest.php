<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.customerservice.status.get request
 *
 * @author auto create
 * @since 1.0, 2020.02.12
 */
class OapiCustomerserviceStatusGetRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.customerservice.status.get";
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
