<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;

/**
 * dingtalk API: dingtalk.oapi.collection.form.get request
 *
 * @author auto create
 * @since 1.0, 2020.06.16
 */
class OapiCollectionFormGetRequest
{
    /**
     * 毫秒级时间戳
     **/
    private $actionDate;

    /**
     * code
     **/
    private $formCode;

    private $apiParas = [];

    public function setActionDate($actionDate)
    {
        $this->actionDate              = $actionDate;
        $this->apiParas["action_date"] = $actionDate;
    }

    public function getActionDate()
    {
        return $this->actionDate;
    }

    public function setFormCode($formCode)
    {
        $this->formCode              = $formCode;
        $this->apiParas["form_code"] = $formCode;
    }

    public function getFormCode()
    {
        return $this->formCode;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.collection.form.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->actionDate, "actionDate");
        RequestCheckUtil::checkNotNull($this->formCode, "formCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
