<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.workspace.project.member.add request
 *
 * @author auto create
 * @since 1.0, 2020.01.16
 */
class OapiWorkspaceProjectMemberAddRequest
{
    /**
     * 添加成员 最多20个
     **/
    private $members;

    private $apiParas = [];

    public function setMembers($members)
    {
        $this->members             = $members;
        $this->apiParas["members"] = $members;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.workspace.project.member.add";
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
