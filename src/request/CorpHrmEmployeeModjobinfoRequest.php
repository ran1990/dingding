<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.corp.hrm.employee.modjobinfo request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpHrmEmployeeModjobinfoRequest
{
    /**
     * 员工信息对象，被操作人userid是必填，其他信息选填，填写则更新
     **/
    private $hrmApiJobModel;

    /**
     * 操作人userid，必须是拥有被操作人操作权限的管理员userid
     **/
    private $opUserid;

    private $apiParas = [];

    public function setHrmApiJobModel($hrmApiJobModel)
    {
        $this->hrmApiJobModel                = $hrmApiJobModel;
        $this->apiParas["hrm_api_job_model"] = $hrmApiJobModel;
    }

    public function getHrmApiJobModel()
    {
        return $this->hrmApiJobModel;
    }

    public function setOpUserid($opUserid)
    {
        $this->opUserid              = $opUserid;
        $this->apiParas["op_userid"] = $opUserid;
    }

    public function getOpUserid()
    {
        return $this->opUserid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.corp.hrm.employee.modjobinfo";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->opUserid, "opUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
