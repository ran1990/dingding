<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.campus.list request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiEduCampusListRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.campus.list";
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
