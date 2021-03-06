<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.operation.condition.inactive request
 *
 * @author auto create
 * @since 1.0, 2020.07.14
 */
class OapiRhinoMosExecOperationConditionInactiveRequest
{
    /**
     * 入参
     **/
    private $inactiveOperationReq;

    private $apiParas = [];

    public function setInactiveOperationReq($inactiveOperationReq)
    {
        $this->inactiveOperationReq               = $inactiveOperationReq;
        $this->apiParas["inactive_operation_req"] = $inactiveOperationReq;
    }

    public function getInactiveOperationReq()
    {
        return $this->inactiveOperationReq;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.rhino.mos.exec.operation.condition.inactive";
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
