<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.order.batch.get request
 *
 * @author auto create
 * @since 1.0, 2020.04.20
 */
class OapiRhinoOrderBatchGetRequest
{
    /**
     * 请求体
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
        return "dingtalk.oapi.rhino.order.batch.get";
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
