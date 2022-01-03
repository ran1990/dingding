<?php

namespace life2016\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.perform.start request
 *
 * @author auto create
 * @since 1.0, 2020.07.03
 */
class OapiRhinoMosExecPerformStartRequest
{
    /**
     * 执行设备ID列表
     **/
    private $deviceIds;

    /**
     * 工序执行记录ID列表
     **/
    private $operationPerformRecordIds;

    /**
     * 订单ID
     **/
    private $orderId;

    /**
     * 租户ID
     **/
    private $tenantId;

    /**
     * 系统参数
     **/
    private $userid;

    /**
     * 执行员工列表
     **/
    private $workNos;

    private $apiParas = [];

    public function setDeviceIds($deviceIds)
    {
        $this->deviceIds              = $deviceIds;
        $this->apiParas["device_ids"] = $deviceIds;
    }

    public function getDeviceIds()
    {
        return $this->deviceIds;
    }

    public function setOperationPerformRecordIds($operationPerformRecordIds)
    {
        $this->operationPerformRecordIds                = $operationPerformRecordIds;
        $this->apiParas["operation_perform_record_ids"] = $operationPerformRecordIds;
    }

    public function getOperationPerformRecordIds()
    {
        return $this->operationPerformRecordIds;
    }

    public function setOrderId($orderId)
    {
        $this->orderId              = $orderId;
        $this->apiParas["order_id"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId              = $tenantId;
        $this->apiParas["tenant_id"] = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function setWorkNos($workNos)
    {
        $this->workNos              = $workNos;
        $this->apiParas["work_nos"] = $workNos;
    }

    public function getWorkNos()
    {
        return $this->workNos;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.rhino.mos.exec.perform.start";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->deviceIds, 500, "deviceIds");
        RequestCheckUtil::checkNotNull($this->operationPerformRecordIds, "operationPerformRecordIds");
        RequestCheckUtil::checkMaxListSize($this->operationPerformRecordIds, 500, "operationPerformRecordIds");
        RequestCheckUtil::checkNotNull($this->tenantId, "tenantId");
        RequestCheckUtil::checkMaxListSize($this->workNos, 500, "workNos");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}