<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.calendar.v2.event.create request
 *
 * @author auto create
 * @since 1.0, 2020.12.11
 */
class OapiCalendarV2EventCreateRequest
{
    /**
     * 开放平台应用对应的AgentId
     **/
    private $agentid;

    /**
     * 日程创建对象
     **/
    private $event;

    private $apiParas = [];

    public function setAgentid($agentid)
    {
        $this->agentid             = $agentid;
        $this->apiParas["agentid"] = $agentid;
    }

    public function getAgentid()
    {
        return $this->agentid;
    }

    public function setEvent($event)
    {
        $this->event             = $event;
        $this->apiParas["event"] = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.calendar.v2.event.create";
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
