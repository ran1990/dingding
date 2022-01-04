<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.listdimission request
 *
 * @author auto create
 * @since 1.0, 2021.10.20
 */
class OapiSmartworkHrmEmployeeListdimissionRequest
{
    /**
     * 员工id
     **/
    private $useridList;

    private $apiParas = [];

    public function setUseridList($useridList)
    {
        $this->useridList              = $useridList;
        $this->apiParas["userid_list"] = $useridList;
    }

    public function getUseridList()
    {
        return $this->useridList;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartwork.hrm.employee.listdimission";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->useridList, 50, "useridList");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
