<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.crm.objectmeta.customer.describe request
 *
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class OapiCrmObjectmetaCustomerDescribeRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.crm.objectmeta.customer.describe";
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
