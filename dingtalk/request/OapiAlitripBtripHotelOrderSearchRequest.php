<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.hotel.order.search request
 *
 * @author auto create
 * @since 1.0, 2021.10.14
 */
class OapiAlitripBtripHotelOrderSearchRequest
{
    /**
     * rq
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
        return "dingtalk.oapi.alitrip.btrip.hotel.order.search";
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
