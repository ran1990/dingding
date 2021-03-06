<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.blackboard.category.list request
 *
 * @author auto create
 * @since 1.0, 2020.07.29
 */
class OapiBlackboardCategoryListRequest
{
    /**
     * 操作人userId(必须是公告管理员)
     **/
    private $operationUserid;

    private $apiParas = [];

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
        return "dingtalk.oapi.blackboard.category.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operationUserid, "operationUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
