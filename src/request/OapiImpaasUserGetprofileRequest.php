<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.impaas.user.getprofile request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiImpaasUserGetprofileRequest
{
    /**
     * 获取用户属性入参
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
        return "dingtalk.oapi.impaas.user.getprofile";
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
