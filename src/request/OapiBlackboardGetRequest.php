<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.blackboard.get request
 *
 * @author auto create
 * @since 1.0, 2021.06.16
 */
class OapiBlackboardGetRequest
{
    /**
     * 公告id
     **/
    private $blackboardId;

    /**
     * 操作人userId
     **/
    private $operationUserid;

    private $apiParas = [];

    public function setBlackboardId($blackboardId)
    {
        $this->blackboardId              = $blackboardId;
        $this->apiParas["blackboard_id"] = $blackboardId;
    }

    public function getBlackboardId()
    {
        return $this->blackboardId;
    }

    public function setOperationUserid($operationUserid)
    {
        $this->operationUserid              = $operationUserid;
        $this->apiParas["operation_userid"] = $operationUserid;
    }

    public function getOperationUserid()
    {
        return $this->operationUserid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.blackboard.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->blackboardId, "blackboardId");
        RequestCheckUtil::checkNotNull($this->operationUserid, "operationUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
