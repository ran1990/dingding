<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.rhino.mos.space.device.check.in.list request
 *
 * @author auto create
 * @since 1.0, 2021.06.07
 */
class OapiRhinoMosSpaceDeviceCheckInListRequest
{
    /**
     * request
     **/
    private $request;

    private $apiParas = [];

    public function setRequest($request)
    {
        $this->request             = $request;
        $this->apiParas["request"] = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.rhino.mos.space.device.check.in.list";
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
