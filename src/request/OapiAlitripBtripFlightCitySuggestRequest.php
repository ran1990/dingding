<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.flight.city.suggest request
 *
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class OapiAlitripBtripFlightCitySuggestRequest
{
    /**
     * 请求对象
     **/
    private $rq;

    private $apiParas = [];

    public function setRq($rq)
    {
        $this->rq             = $rq;
        $this->apiParas["rq"] = $rq;
    }

    public function getRq()
    {
        return $this->rq;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.alitrip.btrip.flight.city.suggest";
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
