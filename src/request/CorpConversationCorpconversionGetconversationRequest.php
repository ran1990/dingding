<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;

/**
 * dingtalk API: dingtalk.corp.conversation.corpconversion.getconversation request
 *
 * @author auto create
 * @since 1.0, 2020.09.21
 */
class CorpConversationCorpconversionGetconversationRequest
{
    /**
     * 群组ID
     **/
    private $openConversationId;

    private $apiParas = [];

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
        return "dingtalk.corp.conversation.corpconversion.getconversation";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->openConversationId, "openConversationId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
