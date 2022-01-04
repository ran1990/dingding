<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;

/**
 * dingtalk API: dingtalk.oapi.process.baseinfo.list request
 *
 * @author auto create
 * @since 1.0, 2021.12.14
 */
class OapiProcessBaseinfoListRequest
{
    /**
     * 模板code列表
     **/
    private $processCodes;

    private $apiParas = [];

    public function setProcessCodes($processCodes)
    {
        $this->processCodes              = $processCodes;
        $this->apiParas["process_codes"] = $processCodes;
    }

    public function getProcessCodes()
    {
        return $this->processCodes;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.process.baseinfo.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->processCodes, 20, "processCodes");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
