<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.chat.member.friendswitch.update request
 *
 * @author auto create
 * @since 1.0, 2020.07.15
 */
class OapiChatMemberFriendswitchUpdateRequest
{
    /**
     * 会话Id
     **/
    private $chatid;

    /**
     * true开启禁止开关，false关闭禁止开关
     **/
    private $isProhibit;

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

    public function setIsProhibit($isProhibit)
    {
        $this->isProhibit              = $isProhibit;
        $this->apiParas["is_prohibit"] = $isProhibit;
    }

    public function getIsProhibit()
    {
        return $this->isProhibit;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.chat.member.friendswitch.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatid, "chatid");
        RequestCheckUtil::checkNotNull($this->isProhibit, "isProhibit");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
