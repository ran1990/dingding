<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.chat.subadmin.update request
 *
 * @author auto create
 * @since 1.0, 2020.02.27
 */
class OapiChatSubadminUpdateRequest
{
    /**
     * 群会话id
     **/
    private $chatid;

    /**
     * 设置2添加为管理员，设置3删除该管理员
     **/
    private $role;

    /**
     * 群成员id
     **/
    private $userids;

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

    public function setRole($role)
    {
        $this->role             = $role;
        $this->apiParas["role"] = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setUserids($userids)
    {
        $this->userids             = $userids;
        $this->apiParas["userids"] = $userids;
    }

    public function getUserids()
    {
        return $this->userids;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.chat.subadmin.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->chatid, "chatid");
        RequestCheckUtil::checkNotNull($this->role, "role");
        RequestCheckUtil::checkNotNull($this->userids, "userids");
        RequestCheckUtil::checkMaxListSize($this->userids, 12, "userids");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
