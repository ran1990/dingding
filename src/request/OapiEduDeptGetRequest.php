<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.dept.get request
 *
 * @author auto create
 * @since 1.0, 2020.06.23
 */
class OapiEduDeptGetRequest
{
    /**
     * 家校部门id
     **/
    private $deptId;

    private $apiParas = [];

    public function setDeptId($deptId)
    {
        $this->deptId              = $deptId;
        $this->apiParas["dept_id"] = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.dept.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->deptId, "deptId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
