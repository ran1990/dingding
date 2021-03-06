<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.workspace.tasklist.hidebyproject request
 *
 * @author auto create
 * @since 1.0, 2020.12.23
 */
class OapiWorkspaceTasklistHidebyprojectRequest
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
     * 任务所属项目(虚拟企业），基于项目空间的项目
     **/
    private $projectId;

    /**
     * 用户id
     **/
    private $userid;

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
        return "dingtalk.oapi.workspace.tasklist.hidebyproject";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operatorUserid, "operatorUserid");
        RequestCheckUtil::checkNotNull($this->projectId, "projectId");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
