<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.clothes.unperformed.filter request
 *
 * @author auto create
 * @since 1.0, 2020.07.03
 */
class OapiRhinoMosExecClothesUnperformedFilterRequest
{
    /**
     * 入参
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
        return "dingtalk.oapi.rhino.mos.exec.clothes.unperformed.filter";
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
