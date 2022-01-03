<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.user.bind.sync request
 *
 * @author auto create
 * @since 1.0, 2020.12.18
 */
class OapiEduUserBindSyncRequest
{
    /**
     * userId
     **/
    private $userId;

    private $apiParas = [];

    public function setUserId($userId)
    {
        $this->userId              = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.user.bind.sync";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->userId, "userId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
