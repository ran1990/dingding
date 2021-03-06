<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.health.stepinfo.getuserstatus request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiHealthStepinfoGetuserstatusRequest
{
    /**
     * 用户id
     **/
    private $userid;

    private $apiParas = [];

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
        return "dingtalk.oapi.health.stepinfo.getuserstatus";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
