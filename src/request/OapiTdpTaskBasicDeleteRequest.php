<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.tdp.task.basic.delete request
 *
 * @author auto create
 * @since 1.0, 2020.12.23
 */
class OapiTdpTaskBasicDeleteRequest
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
     * 任务ID
     **/
    private $taskId;

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

    public function setTaskId($taskId)
    {
        $this->taskId              = $taskId;
        $this->apiParas["task_id"] = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.tdp.task.basic.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operatorUserid, "operatorUserid");
        RequestCheckUtil::checkNotNull($this->taskId, "taskId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
