<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.attendance.getupdatedata request
 *
 * @author auto create
 * @since 1.0, 2020.02.27
 */
class OapiAttendanceGetupdatedataRequest
{
    /**
     * 用户id
     **/
    private $userid;

    /**
     * 工作日
     **/
    private $workDate;

    private $apiParas = [];

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function setWorkDate($workDate)
    {
        $this->workDate              = $workDate;
        $this->apiParas["work_date"] = $workDate;
    }

    public function getWorkDate()
    {
        return $this->workDate;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.attendance.getupdatedata";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->userid, "userid");
        RequestCheckUtil::checkNotNull($this->workDate, "workDate");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
