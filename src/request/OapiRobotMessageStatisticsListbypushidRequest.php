<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.robot.message.statistics.listbypushid request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiRobotMessageStatisticsListbypushidRequest
{
    /**
     * 群Id列表
     **/
    private $conversationIds;

    /**
     * 当前页码
     **/
    private $page;

    /**
     * 分页大小
     **/
    private $pageSize;

    /**
     * 机器人消息推送Id
     **/
    private $pushId;

    private $apiParas = [];

    public function setConversationIds($conversationIds)
    {
        $this->conversationIds              = $conversationIds;
        $this->apiParas["conversation_ids"] = $conversationIds;
    }

    public function getConversationIds()
    {
        return $this->conversationIds;
    }

    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize              = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPushId($pushId)
    {
        $this->pushId              = $pushId;
        $this->apiParas["push_id"] = $pushId;
    }

    public function getPushId()
    {
        return $this->pushId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.robot.message.statistics.listbypushid";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->conversationIds, "conversationIds");
        RequestCheckUtil::checkMaxListSize($this->conversationIds, 20, "conversationIds");
        RequestCheckUtil::checkNotNull($this->page, "page");
        RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        RequestCheckUtil::checkNotNull($this->pushId, "pushId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
