<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.impaas.user.addprofile request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasUserAddprofileRequest
{
    /**
     * 添加的账号信息
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
        return "dingtalk.oapi.impaas.user.addprofile";
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
