<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.smartwork.bpms.processinstance.create request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class SmartworkBpmsProcessinstanceCreateRequest
{
    /**
     * 企业微应用标识
     **/
    private $agentId;

    /**
     * 审批人userid列表
     **/
    private $approvers;

    /**
     * 抄送人userid列表
     **/
    private $ccList;

    /**
     * 抄送时间,分为（START,FINISH,START_FINISH）
     **/
    private $ccPosition;

    /**
     * 发起人所在的部门
     **/
    private $deptId;

    /**
     * 审批流表单参数
     **/
    private $formComponentValues;

    /**
     * 审批实例发起人的userid
     **/
    private $originatorUserId;

    /**
     * 审批流的唯一码
     **/
    private $processCode;

    private $apiParas = [];

    public function setAgentId($agentId)
    {
        $this->agentId              = $agentId;
        $this->apiParas["agent_id"] = $agentId;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }

    public function setApprovers($approvers)
    {
        $this->approvers             = $approvers;
        $this->apiParas["approvers"] = $approvers;
    }

    public function getApprovers()
    {
        return $this->approvers;
    }

    public function setCcList($ccList)
    {
        $this->ccList              = $ccList;
        $this->apiParas["cc_list"] = $ccList;
    }

    public function getCcList()
    {
        return $this->ccList;
    }

    public function setCcPosition($ccPosition)
    {
        $this->ccPosition              = $ccPosition;
        $this->apiParas["cc_position"] = $ccPosition;
    }

    public function getCcPosition()
    {
        return $this->ccPosition;
    }

    public function setDeptId($deptId)
    {
        $this->deptId              = $deptId;
        $this->apiParas["dept_id"] = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    public function setFormComponentValues($formComponentValues)
    {
        $this->formComponentValues               = $formComponentValues;
        $this->apiParas["form_component_values"] = $formComponentValues;
    }

    public function getFormComponentValues()
    {
        return $this->formComponentValues;
    }

    public function setOriginatorUserId($originatorUserId)
    {
        $this->originatorUserId               = $originatorUserId;
        $this->apiParas["originator_user_id"] = $originatorUserId;
    }

    public function getOriginatorUserId()
    {
        return $this->originatorUserId;
    }

    public function setProcessCode($processCode)
    {
        $this->processCode              = $processCode;
        $this->apiParas["process_code"] = $processCode;
    }

    public function getProcessCode()
    {
        return $this->processCode;
    }

    public function getApiMethodName()
    {
        return "dingtalk.smartwork.bpms.processinstance.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->approvers, "approvers");
        RequestCheckUtil::checkMaxListSize($this->approvers, 20, "approvers");
        RequestCheckUtil::checkMaxListSize($this->ccList, 20, "ccList");
        RequestCheckUtil::checkNotNull($this->deptId, "deptId");
        RequestCheckUtil::checkNotNull($this->originatorUserId, "originatorUserId");
        RequestCheckUtil::checkNotNull($this->processCode, "processCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
