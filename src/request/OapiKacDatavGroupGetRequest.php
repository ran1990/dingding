<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.kac.datav.group.get request
 *
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class OapiKacDatavGroupGetRequest
{
    /**
     * 请求对象
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
        return "dingtalk.oapi.kac.datav.group.get";
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
