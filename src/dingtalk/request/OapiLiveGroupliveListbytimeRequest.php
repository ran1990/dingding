<?php

namespace life2016\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.live.grouplive.listbytime request
 *
 * @author auto create
 * @since 1.0, 2020.07.23
 */
class OapiLiveGroupliveListbytimeRequest
{
    /**
     * 查询直播参数
     **/
    private $req;

    private $apiParas = [];

    public function setReq($req)
    {
        $this->req             = $req;
        $this->apiParas["req"] = $req;
    }

    public function getReq()
    {
        return $this->req;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.live.grouplive.listbytime";
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
