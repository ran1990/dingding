<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.class.student.list request
 *
 * @author auto create
 * @since 1.0, 2021.02.18
 */
class OapiEduClassStudentListRequest
{
    /**
     * 班级ID
     **/
    private $classId;

    /**
     * corpId
     **/
    private $corpId;

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

    public function setCorpId($corpId)
    {
        $this->corpId              = $corpId;
        $this->apiParas["corp_id"] = $corpId;
    }

    public function getCorpId()
    {
        return $this->corpId;
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
        return "dingtalk.oapi.edu.class.student.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->classId, "classId");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
