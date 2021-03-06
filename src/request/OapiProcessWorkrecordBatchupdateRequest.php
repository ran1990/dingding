<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.process.workrecord.batchupdate request
 *
 * @author auto create
 * @since 1.0, 2019.10.24
 */
class OapiProcessWorkrecordBatchupdateRequest
{
    /**
     * 请求
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
        return "dingtalk.oapi.process.workrecord.batchupdate";
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
