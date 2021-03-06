<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.customerservice.status.update request
 *
 * @author auto create
 * @since 1.0, 2021.03.29
 */
class OapiCustomerserviceStatusUpdateRequest
{
    /**
     * 系统自动生成
     **/
    private $statusChange;

    private $apiParas = [];

    public function setStatusChange($statusChange)
    {
        $this->statusChange              = $statusChange;
        $this->apiParas["status_change"] = $statusChange;
    }

    public function getStatusChange()
    {
        return $this->statusChange;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.customerservice.status.update";
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
