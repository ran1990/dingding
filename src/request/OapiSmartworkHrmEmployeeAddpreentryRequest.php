<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.addpreentry request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartworkHrmEmployeeAddpreentryRequest
{
    /**
     * 添加待入职入参
     **/
    private $param;

    private $apiParas = [];

    public function setParam($param)
    {
        $this->param             = $param;
        $this->apiParas["param"] = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartwork.hrm.employee.addpreentry";
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
