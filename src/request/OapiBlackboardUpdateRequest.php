<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.blackboard.update request
 *
 * @author auto create
 * @since 1.0, 2020.07.29
 */
class OapiBlackboardUpdateRequest
{
    /**
     * 请求入参
     **/
    private $updateRequest;

    private $apiParas = [];

    public function setUpdateRequest($updateRequest)
    {
        $this->updateRequest              = $updateRequest;
        $this->apiParas["update_request"] = $updateRequest;
    }

    public function getUpdateRequest()
    {
        return $this->updateRequest;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.blackboard.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
