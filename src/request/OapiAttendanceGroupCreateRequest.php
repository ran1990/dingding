<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.attendance.group.create request
 *
 * @author auto create
 * @since 1.0, 2020.04.09
 */
class OapiAttendanceGroupCreateRequest
{
    /**
     * 考勤组
     **/
    private $group;

    /**
     * 操作人userId
     **/
    private $opUserid;

    private $apiParas = [];

    public function setGroup($group)
    {
        $this->group             = $group;
        $this->apiParas["group"] = $group;
    }

    public function getGroup()
    {
        return $this->group;
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
        return "dingtalk.oapi.attendance.group.create";
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
