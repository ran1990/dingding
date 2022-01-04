<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.project.point.rule.list request
 *
 * @author auto create
 * @since 1.0, 2020.12.22
 */
class OapiProjectPointRuleListRequest
{
    /**
     * 业务ID（固定值，农村积分传7001）
     **/
    private $tenantId;

    private $apiParas = [];

    public function setTenantId($tenantId)
    {
        $this->tenantId              = $tenantId;
        $this->apiParas["tenant_id"] = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.project.point.rule.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->tenantId, "tenantId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
