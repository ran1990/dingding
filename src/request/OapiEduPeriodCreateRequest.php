<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.period.create request
 *
 * @author auto create
 * @since 1.0, 2021.05.31
 */
class OapiEduPeriodCreateRequest
{
    /**
     * 学段信息
     **/
    private $openPeriod;

    /**
     * 钉钉管理员
     **/
    private $operator;

    /**
     * 校区id
     **/
    private $superId;

    private $apiParas = [];

    public function setOpenPeriod($openPeriod)
    {
        $this->openPeriod              = $openPeriod;
        $this->apiParas["open_period"] = $openPeriod;
    }

    public function getOpenPeriod()
    {
        return $this->openPeriod;
    }

    public function setOperator($operator)
    {
        $this->operator             = $operator;
        $this->apiParas["operator"] = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function setSuperId($superId)
    {
        $this->superId              = $superId;
        $this->apiParas["super_id"] = $superId;
    }

    public function getSuperId()
    {
        return $this->superId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.period.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operator, "operator");
        RequestCheckUtil::checkNotNull($this->superId, "superId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
