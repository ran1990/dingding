<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.workspace.project.member.remove request
 *
 * @author auto create
 * @since 1.0, 2021.02.23
 */
class OapiWorkspaceProjectMemberRemoveRequest
{
    /**
     * 操作人工号
     **/
    private $operatorStaffId;

    /**
     * 来源ID
     **/
    private $projectSourceId;

    /**
     * 来源
     **/
    private $source;

    /**
     * 待删除成员工号
     **/
    private $staffId;

    private $apiParas = [];

    public function setOperatorStaffId($operatorStaffId)
    {
        $this->operatorStaffId               = $operatorStaffId;
        $this->apiParas["operator_staff_id"] = $operatorStaffId;
    }

    public function getOperatorStaffId()
    {
        return $this->operatorStaffId;
    }

    public function setProjectSourceId($projectSourceId)
    {
        $this->projectSourceId               = $projectSourceId;
        $this->apiParas["project_source_id"] = $projectSourceId;
    }

    public function getProjectSourceId()
    {
        return $this->projectSourceId;
    }

    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setStaffId($staffId)
    {
        $this->staffId              = $staffId;
        $this->apiParas["staff_id"] = $staffId;
    }

    public function getStaffId()
    {
        return $this->staffId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.workspace.project.member.remove";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operatorStaffId, "operatorStaffId");
        RequestCheckUtil::checkNotNull($this->projectSourceId, "projectSourceId");
        RequestCheckUtil::checkNotNull($this->staffId, "staffId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
