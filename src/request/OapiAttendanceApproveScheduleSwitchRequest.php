<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.attendance.approve.schedule.switch request
 *
 * @author auto create
 * @since 1.0, 2019.09.19
 */
class OapiAttendanceApproveScheduleSwitchRequest
{
    /**
     * 申请人换班日期当天的班次id
     **/
    private $applyShiftId;

    /**
     * 申请换班人id，仅支持排班制考勤组用户
     **/
    private $applyUserid;

    /**
     * 审批单唯一id
     **/
    private $approveId;

    /**
     * 申请人还班日期当天的班次id
     **/
    private $rebackApplyShiftId;

    /**
     * 还班日期，当天必须有排班或排休，如果申请换班人和被换班人是同一个人，那么必须要有还班日期
     **/
    private $rebackDate;

    /**
     * 被换班人还班日期当天的班次id
     **/
    private $rebackTargetShiftId;

    /**
     * 申请换班日期，当天必须有排班或排休
     **/
    private $switchDate;

    /**
     * 被换班人换班日期当天的班次id
     **/
    private $targetShiftId;

    /**
     * 被换班人id，仅支持排班制考勤组用户
     **/
    private $targetUserid;

    /**
     * 发起人的user_id
     **/
    private $userid;

    private $apiParas = [];

    public function setApplyShiftId($applyShiftId)
    {
        $this->applyShiftId               = $applyShiftId;
        $this->apiParas["apply_shift_id"] = $applyShiftId;
    }

    public function getApplyShiftId()
    {
        return $this->applyShiftId;
    }

    public function setApplyUserid($applyUserid)
    {
        $this->applyUserid              = $applyUserid;
        $this->apiParas["apply_userid"] = $applyUserid;
    }

    public function getApplyUserid()
    {
        return $this->applyUserid;
    }

    public function setApproveId($approveId)
    {
        $this->approveId              = $approveId;
        $this->apiParas["approve_id"] = $approveId;
    }

    public function getApproveId()
    {
        return $this->approveId;
    }

    public function setRebackApplyShiftId($rebackApplyShiftId)
    {
        $this->rebackApplyShiftId                = $rebackApplyShiftId;
        $this->apiParas["reback_apply_shift_id"] = $rebackApplyShiftId;
    }

    public function getRebackApplyShiftId()
    {
        return $this->rebackApplyShiftId;
    }

    public function setRebackDate($rebackDate)
    {
        $this->rebackDate              = $rebackDate;
        $this->apiParas["reback_date"] = $rebackDate;
    }

    public function getRebackDate()
    {
        return $this->rebackDate;
    }

    public function setRebackTargetShiftId($rebackTargetShiftId)
    {
        $this->rebackTargetShiftId                = $rebackTargetShiftId;
        $this->apiParas["reback_target_shift_id"] = $rebackTargetShiftId;
    }

    public function getRebackTargetShiftId()
    {
        return $this->rebackTargetShiftId;
    }

    public function setSwitchDate($switchDate)
    {
        $this->switchDate              = $switchDate;
        $this->apiParas["switch_date"] = $switchDate;
    }

    public function getSwitchDate()
    {
        return $this->switchDate;
    }

    public function setTargetShiftId($targetShiftId)
    {
        $this->targetShiftId               = $targetShiftId;
        $this->apiParas["target_shift_id"] = $targetShiftId;
    }

    public function getTargetShiftId()
    {
        return $this->targetShiftId;
    }

    public function setTargetUserid($targetUserid)
    {
        $this->targetUserid              = $targetUserid;
        $this->apiParas["target_userid"] = $targetUserid;
    }

    public function getTargetUserid()
    {
        return $this->targetUserid;
    }

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.attendance.approve.schedule.switch";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->applyUserid, "applyUserid");
        RequestCheckUtil::checkNotNull($this->approveId, "approveId");
        RequestCheckUtil::checkMaxLength($this->approveId, 100, "approveId");
        RequestCheckUtil::checkNotNull($this->switchDate, "switchDate");
        RequestCheckUtil::checkNotNull($this->targetUserid, "targetUserid");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
