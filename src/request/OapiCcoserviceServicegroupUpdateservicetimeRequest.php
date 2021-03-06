<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.ccoservice.servicegroup.updateservicetime request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiCcoserviceServicegroupUpdateservicetimeRequest
{
    /**
     * 服务结束时间
     **/
    private $endTime;

    /**
     * 群加密id
     **/
    private $openConversationId;

    /**
     * 服务开始时间
     **/
    private $startTime;

    /**
     * 日期类型,0-工作日;1-每日;99-端上不显示
     **/
    private $timeType;

    private $apiParas = [];

    public function setEndTime($endTime)
    {
        $this->endTime              = $endTime;
        $this->apiParas["end_time"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setOpenConversationId($openConversationId)
    {
        $this->openConversationId               = $openConversationId;
        $this->apiParas["open_conversation_id"] = $openConversationId;
    }

    public function getOpenConversationId()
    {
        return $this->openConversationId;
    }

    public function setStartTime($startTime)
    {
        $this->startTime              = $startTime;
        $this->apiParas["start_time"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setTimeType($timeType)
    {
        $this->timeType              = $timeType;
        $this->apiParas["time_type"] = $timeType;
    }

    public function getTimeType()
    {
        return $this->timeType;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.ccoservice.servicegroup.updateservicetime";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->endTime, "endTime");
        RequestCheckUtil::checkNotNull($this->openConversationId, "openConversationId");
        RequestCheckUtil::checkNotNull($this->startTime, "startTime");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
