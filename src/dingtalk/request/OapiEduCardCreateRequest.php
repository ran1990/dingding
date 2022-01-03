<?php

namespace life2016\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.card.create request
 *
 * @author auto create
 * @since 1.0, 2020.12.31
 */
class OapiEduCardCreateRequest
{
    /**
     * 参数
     **/
    private $opencardcreateparam;

    private $apiParas = [];

    public function setOpencardcreateparam($opencardcreateparam)
    {
        $this->opencardcreateparam             = $opencardcreateparam;
        $this->apiParas["opencardcreateparam"] = $opencardcreateparam;
    }

    public function getOpencardcreateparam()
    {
        return $this->opencardcreateparam;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.card.create";
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
