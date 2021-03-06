<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.message.corpconversation.getsendprogress request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiMessageCorpconversationGetsendprogressRequest
{
    /**
     * 发送消息时使用的微应用的id
     **/
    private $agentId;

    /**
     * 发送消息时钉钉返回的任务id
     **/
    private $taskId;

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
        return "dingtalk.oapi.message.corpconversation.getsendprogress";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->agentId, "agentId");
        RequestCheckUtil::checkNotNull($this->taskId, "taskId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
