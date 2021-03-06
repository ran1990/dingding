<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.im.chat.servicegroup.member.query request
 *
 * @author auto create
 * @since 1.0, 2020.03.30
 */
class OapiImChatServicegroupMemberQueryRequest
{
    /**
     * 开放的chatId
     **/
    private $chatId;

    /**
     * 0- 不包含群主，1-包含群主
     **/
    private $includeOwner;

    /**
     * 页码，从1开始
     **/
    private $pageNum;

    /**
     * 每页大小，最大100
     **/
    private $pageSize;

    private $apiParas = [];

    public function setChatId($chatId)
    {
        $this->chatId              = $chatId;
        $this->apiParas["chat_id"] = $chatId;
    }

    public function getChatId()
    {
        return $this->chatId;
    }

    public function setIncludeOwner($includeOwner)
    {
        $this->includeOwner              = $includeOwner;
        $this->apiParas["include_owner"] = $includeOwner;
    }

    public function getIncludeOwner()
    {
        return $this->includeOwner;
    }

    public function setPageNum($pageNum)
    {
        $this->pageNum              = $pageNum;
        $this->apiParas["page_num"] = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.im.chat.servicegroup.member.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatId, "chatId");
        RequestCheckUtil::checkMaxLength($this->chatId, 128, "chatId");
        RequestCheckUtil::checkNotNull($this->pageNum, "pageNum");
        RequestCheckUtil::checkMinValue($this->pageNum, 1, "pageNum");
        RequestCheckUtil::checkNotNull($this->pageSize, "pageSize");
        RequestCheckUtil::checkMaxValue($this->pageSize, 100, "pageSize");
        RequestCheckUtil::checkMinValue($this->pageSize, 1, "pageSize");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
