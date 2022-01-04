<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.period.get request
 *
 * @author auto create
 * @since 1.0, 2019.07.09
 */
class OapiEduPeriodGetRequest
{
    /**
     * 学段ID
     **/
    private $periodId;

    private $apiParas = [];

    public function setPeriodId($periodId)
    {
        $this->periodId              = $periodId;
        $this->apiParas["period_id"] = $periodId;
    }

    public function getPeriodId()
    {
        return $this->periodId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.period.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->periodId, "periodId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
