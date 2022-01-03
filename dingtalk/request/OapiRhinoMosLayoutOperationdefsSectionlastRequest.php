<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.mos.layout.operationdefs.sectionlast request
 *
 * @author auto create
 * @since 1.0, 2020.04.08
 */
class OapiRhinoMosLayoutOperationdefsSectionlastRequest
{
    /**
     * 版本：如果为空，查生效版本；不为空，查指定版本
     **/
    private $flowVersion;

    /**
     * 是否需要分配信息
     **/
    private $needAssignInfo;

    /**
     * 订单ID
     **/
    private $orderId;

    /**
     * 工段编码
     **/
    private $sectionCode;

    /**
     * 租户ID
     **/
    private $tenantId;

    /**
     * 查询暂存版本
     **/
    private $tmpSave;

    /**
     * 订单ID
     **/
    private $userid;

    private $apiParas = [];

    public function setFlowVersion($flowVersion)
    {
        $this->flowVersion              = $flowVersion;
        $this->apiParas["flow_version"] = $flowVersion;
    }

    public function getFlowVersion()
    {
        return $this->flowVersion;
    }

    public function setNeedAssignInfo($needAssignInfo)
    {
        $this->needAssignInfo               = $needAssignInfo;
        $this->apiParas["need_assign_info"] = $needAssignInfo;
    }

    public function getNeedAssignInfo()
    {
        return $this->needAssignInfo;
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

    public function setSectionCode($sectionCode)
    {
        $this->sectionCode              = $sectionCode;
        $this->apiParas["section_code"] = $sectionCode;
    }

    public function getSectionCode()
    {
        return $this->sectionCode;
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

    public function setTmpSave($tmpSave)
    {
        $this->tmpSave              = $tmpSave;
        $this->apiParas["tmp_save"] = $tmpSave;
    }

    public function getTmpSave()
    {
        return $this->tmpSave;
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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.rhino.mos.layout.operationdefs.sectionlast";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->needAssignInfo, "needAssignInfo");
        RequestCheckUtil::checkNotNull($this->orderId, "orderId");
        RequestCheckUtil::checkNotNull($this->sectionCode, "sectionCode");
        RequestCheckUtil::checkNotNull($this->tenantId, "tenantId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
