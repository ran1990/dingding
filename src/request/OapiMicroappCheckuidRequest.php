<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.microapp.checkuid request
 *
 * @author auto create
 * @since 1.0, 2020.11.17
 */
class OapiMicroappCheckuidRequest
{
    /**
     * 企业微应用id
     **/
    private $agentid;

    /**
     * 员工id
     **/
    private $userid;

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
        return "dingtalk.oapi.microapp.checkuid";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->agentid, "agentid");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
