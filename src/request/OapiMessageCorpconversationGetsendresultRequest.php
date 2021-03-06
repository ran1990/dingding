<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.message.corpconversation.getsendresult request
 *
 * @author auto create
 * @since 1.0, 2020.03.20
 */
class OapiMessageCorpconversationGetsendresultRequest
{
    /**
     * 微应用的agentid
     **/
    private $agentId;

    /**
     * 异步任务的id
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
        return "dingtalk.oapi.message.corpconversation.getsendresult";
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
