<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.tdp.project.member.removebyproject request
 *
 * @author auto create
 * @since 1.0, 2020.12.23
 */
class OapiTdpProjectMemberRemovebyprojectRequest
{
    /**
     * 微应用agentId
     **/
    private $microappAgentId;

    /**
     * 操作者id
     **/
    private $operatorUserid;

    /**
     * 项目ID
     **/
    private $projectId;

    private $apiParas = [];

    public function setMicroappAgentId($microappAgentId)
    {
        $this->microappAgentId               = $microappAgentId;
        $this->apiParas["microapp_agent_id"] = $microappAgentId;
    }

    public function getMicroappAgentId()
    {
        return $this->microappAgentId;
    }

    public function setOperatorUserid($operatorUserid)
    {
        $this->operatorUserid              = $operatorUserid;
        $this->apiParas["operator_userid"] = $operatorUserid;
    }

    public function getOperatorUserid()
    {
        return $this->operatorUserid;
    }

    public function setProjectId($projectId)
    {
        $this->projectId              = $projectId;
        $this->apiParas["project_id"] = $projectId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.tdp.project.member.removebyproject";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operatorUserid, "operatorUserid");
        RequestCheckUtil::checkNotNull($this->projectId, "projectId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}