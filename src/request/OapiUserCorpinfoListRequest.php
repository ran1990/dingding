<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.user.corpinfo.list request
 *
 * @author auto create
 * @since 1.0, 2021.10.12
 */
class OapiUserCorpinfoListRequest
{
    /**
     * 企业全称
     **/
    private $corpName;

    /**
     * 用户手机号
     **/
    private $mobile;

    private $apiParas = [];

    public function setCorpName($corpName)
    {
        $this->corpName              = $corpName;
        $this->apiParas["corp_name"] = $corpName;
    }

    public function getCorpName()
    {
        return $this->corpName;
    }

    public function setMobile($mobile)
    {
        $this->mobile             = $mobile;
        $this->apiParas["mobile"] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.user.corpinfo.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->corpName, "corpName");
        RequestCheckUtil::checkNotNull($this->mobile, "mobile");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
