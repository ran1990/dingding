<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.workrecord.update request
 *
 * @author auto create
 * @since 1.0, 2020.12.08
 */
class OapiWorkrecordUpdateRequest
{
    /**
     * 待办事项唯一id
     **/
    private $recordId;

    /**
     * 用户id
     **/
    private $userid;

    private $apiParas = [];

    public function setRecordId($recordId)
    {
        $this->recordId              = $recordId;
        $this->apiParas["record_id"] = $recordId;
    }

    public function getRecordId()
    {
        return $this->recordId;
    }

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.workrecord.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->recordId, "recordId");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
