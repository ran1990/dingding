<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.hire.job.queryjobids request
 *
 * @author auto create
 * @since 1.0, 2021.03.02
 */
class OapiHireJobQueryjobidsRequest
{
    /**
     * 查询参数
     **/
    private $queryParam;

    /**
     * 员工标识
     **/
    private $userid;

    private $apiParas = [];

    public function setQueryParam($queryParam)
    {
        $this->queryParam              = $queryParam;
        $this->apiParas["query_param"] = $queryParam;
    }

    public function getQueryParam()
    {
        return $this->queryParam;
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
        return "dingtalk.oapi.hire.job.queryjobids";
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
