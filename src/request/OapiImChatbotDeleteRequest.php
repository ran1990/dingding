<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.im.chatbot.delete request
 *
 * @author auto create
 * @since 1.0, 2021.03.17
 */
class OapiImChatbotDeleteRequest
{
    /**
     * 开放的机器人userId
     **/
    private $chatbotUserId;

    /**
     * 开放的会话conversationId
     **/
    private $openConversationId;

    private $apiParas = [];

    public function setChatbotUserId($chatbotUserId)
    {
        $this->chatbotUserId               = $chatbotUserId;
        $this->apiParas["chatbot_user_id"] = $chatbotUserId;
    }

    public function getChatbotUserId()
    {
        return $this->chatbotUserId;
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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.im.chatbot.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatbotUserId, "chatbotUserId");
        RequestCheckUtil::checkMaxLength($this->chatbotUserId, 128, "chatbotUserId");
        RequestCheckUtil::checkNotNull($this->openConversationId, "openConversationId");
        RequestCheckUtil::checkMaxLength($this->openConversationId, 128, "openConversationId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
