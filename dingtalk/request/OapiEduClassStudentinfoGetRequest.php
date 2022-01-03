<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.class.studentinfo.get request
 *
 * @author auto create
 * @since 1.0, 2020.08.29
 */
class OapiEduClassStudentinfoGetRequest
{
    /**
     * isv应用id
     **/
    private $appId;

    /**
     * 班级id
     **/
    private $classId;

    /**
     * 学生id
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
        return "dingtalk.oapi.edu.class.studentinfo.get";
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
