<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.microapp.scope.delete request
 *
 * @author auto create
 * @since 1.0, 2020.08.06
 */
class OapiMicroappScopeDeleteRequest
{
    /**
     * 应用id
     **/
    private $agentid;

    /**
     * 用户列表，逗号分割
     **/
    private $useridList;

    private $apiParas = [];

    public function setAgentid($agentid)
    {
        $this->agentid             = $agentid;
        $this->apiParas["agentid"] = $agentid;
    }

    public function getAgentid()
    {
        return $this->agentid;
    }

    public function setUseridList($useridList)
    {
        $this->useridList              = $useridList;
        $this->apiParas["userid_list"] = $useridList;
    }

    public function getUseridList()
    {
        return $this->useridList;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.microapp.scope.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->agentid, "agentid");
        RequestCheckUtil::checkNotNull($this->useridList, "useridList");
        RequestCheckUtil::checkMaxListSize($this->useridList, 999, "useridList");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
