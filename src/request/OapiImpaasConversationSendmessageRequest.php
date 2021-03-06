<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.impaas.conversation.sendmessage request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasConversationSendmessageRequest
{
    /**
     * 群id
     **/
    private $chatid;

    /**
     * 消息内容
     **/
    private $content;

    /**
     * 1. 优惠券 2 系统消息
     **/
    private $type;

    private $apiParas = [];

    public function setChatid($chatid)
    {
        $this->chatid             = $chatid;
        $this->apiParas["chatid"] = $chatid;
    }

    public function getChatid()
    {
        return $this->chatid;
    }

    public function setContent($content)
    {
        $this->content             = $content;
        $this->apiParas["content"] = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.impaas.conversation.sendmessage";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatid, "chatid");
        RequestCheckUtil::checkNotNull($this->content, "content");
        RequestCheckUtil::checkNotNull($this->type, "type");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
