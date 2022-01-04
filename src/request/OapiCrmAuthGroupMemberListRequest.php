<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.crm.auth.group.member.list request
 *
 * @author auto create
 * @since 1.0, 2020.01.16
 */
class OapiCrmAuthGroupMemberListRequest
{
    /**
     * 权限组id
     **/
    private $roleId;

    private $apiParas = [];

    public function setRoleId($roleId)
    {
        $this->roleId              = $roleId;
        $this->apiParas["role_id"] = $roleId;
    }

    public function getRoleId()
    {
        return $this->roleId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.crm.auth.group.member.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->roleId, "roleId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
