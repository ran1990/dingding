<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.im.chat.servicegroup.disband request
 *
 * @author auto create
 * @since 1.0, 2021.01.22
 */
class OapiImChatServicegroupDisbandRequest
{
    /**
     * 开放的chatId
     **/
    private $chatId;

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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.im.chat.servicegroup.disband";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatId, "chatId");
        RequestCheckUtil::checkMaxLength($this->chatId, 128, "chatId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
