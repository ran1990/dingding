<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.crm.app.update request
 *
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiCrmAppUpdateRequest
{
    /**
     * UpdateCrmMicroAppRequest
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
        return "dingtalk.oapi.crm.app.update";
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
