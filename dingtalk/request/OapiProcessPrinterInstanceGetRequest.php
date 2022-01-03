<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.process.printer.instance.get request
 *
 * @author auto create
 * @since 1.0, 2020.04.08
 */
class OapiProcessPrinterInstanceGetRequest
{
    /**
     * 脱敏数据请求
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
        return "dingtalk.oapi.process.printer.instance.get";
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