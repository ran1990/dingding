<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.process.gettodonum request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiProcessGettodonumRequest
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
        return "dingtalk.oapi.process.gettodonum";
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