<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.class.studentid.get request
 *
 * @author auto create
 * @since 1.0, 2020.08.29
 */
class OapiEduClassStudentidGetRequest
{
    /**
     * 应用ID
     **/
    private $appId;

    /**
     * 班级ID
     **/
    private $classId;

    /**
     * 教师ID
     **/
    private $userid;

    private $apiParas = [];

    public function setAppId($appId)
    {
        $this->appId              = $appId;
        $this->apiParas["app_id"] = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    public function setClassId($classId)
    {
        $this->classId              = $classId;
        $this->apiParas["class_id"] = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
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
        return "dingtalk.oapi.edu.class.studentid.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->appId, "appId");
        RequestCheckUtil::checkNotNull($this->classId, "classId");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
