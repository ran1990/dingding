<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.corp.liveness.get request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpLivenessGetRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.corp.liveness.get";
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
