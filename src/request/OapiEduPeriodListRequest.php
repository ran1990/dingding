<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.period.list request
 *
 * @author auto create
 * @since 1.0, 2019.07.09
 */
class OapiEduPeriodListRequest
{
    /**
     * 校区ID
     **/
    private $campusId;

    private $apiParas = [];

    public function setCampusId($campusId)
    {
        $this->campusId              = $campusId;
        $this->apiParas["campus_id"] = $campusId;
    }

    public function getCampusId()
    {
        return $this->campusId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.period.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->campusId, "campusId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
