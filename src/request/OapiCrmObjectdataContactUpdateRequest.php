<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.contact.update request
 *
 * @author auto create
 * @since 1.0, 2021.01.07
 */
class OapiCrmObjectdataContactUpdateRequest
{
    /**
     * 联系人数据
     **/
    private $instance;

    private $apiParas = [];

    public function setInstance($instance)
    {
        $this->instance             = $instance;
        $this->apiParas["instance"] = $instance;
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.crm.objectdata.contact.update";
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
