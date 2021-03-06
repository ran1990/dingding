<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.class.student.get request
 *
 * @author auto create
 * @since 1.0, 2020.06.11
 */
class OapiEduClassStudentGetRequest
{
    /**
     * 班级ID
     **/
    private $classId;

    /**
     * 学生入参
     **/
    private $studentParam;

    /**
     * 用户ID
     **/
    private $userid;

    private $apiParas = [];

    public function setClassId($classId)
    {
        $this->classId              = $classId;
        $this->apiParas["class_id"] = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }

    public function setStudentParam($studentParam)
    {
        $this->studentParam              = $studentParam;
        $this->apiParas["student_param"] = $studentParam;
    }

    public function getStudentParam()
    {
        return $this->studentParam;
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
        return "dingtalk.oapi.edu.class.student.get";
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
