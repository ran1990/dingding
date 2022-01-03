<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.authorization.rbac.role.action.update request
 *
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiAuthorizationRbacRoleActionUpdateRequest
{
    /**
     * 微应用agenId,需要联系权限平台配置
     **/
    private $agentId;

    /**
     * action
     **/
    private $openAction;

    /**
     * 管理组id
     **/
    private $openRoleId;

    private $apiParas = [];

    public function setAgentId($agentId)
    {
        $this->agentId              = $agentId;
        $this->apiParas["agent_id"] = $agentId;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }

    public function setOpenAction($openAction)
    {
        $this->openAction              = $openAction;
        $this->apiParas["open_action"] = $openAction;
    }

    public function getOpenAction()
    {
        return $this->openAction;
    }

    public function setOpenRoleId($openRoleId)
    {
        $this->openRoleId               = $openRoleId;
        $this->apiParas["open_role_id"] = $openRoleId;
    }

    public function getOpenRoleId()
    {
        return $this->openRoleId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.authorization.rbac.role.action.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->agentId, "agentId");
        RequestCheckUtil::checkNotNull($this->openRoleId, "openRoleId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
