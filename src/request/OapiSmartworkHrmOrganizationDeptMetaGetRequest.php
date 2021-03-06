<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.organization.dept.meta.get request
 *
 * @author auto create
 * @since 1.0, 2021.01.26
 */
class OapiSmartworkHrmOrganizationDeptMetaGetRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartwork.hrm.organization.dept.meta.get";
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
