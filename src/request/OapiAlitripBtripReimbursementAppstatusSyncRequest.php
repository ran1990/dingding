<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.alitrip.btrip.reimbursement.appstatus.sync request
 *
 * @author auto create
 * @since 1.0, 2020.06.15
 */
class OapiAlitripBtripReimbursementAppstatusSyncRequest
{
    /**
     * 请求参数
     **/
    private $rq;

    private $apiParas = [];

    public function setRq($rq)
    {
        $this->rq             = $rq;
        $this->apiParas["rq"] = $rq;
    }

    public function getRq()
    {
        return $this->rq;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.alitrip.btrip.reimbursement.appstatus.sync";
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