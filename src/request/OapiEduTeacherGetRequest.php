<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.teacher.get request
 *
 * @author auto create
 * @since 1.0, 2020.06.09
 */
class OapiEduTeacherGetRequest
{
    /**
     * 班级ID
     **/
    private $classId;

    /**
     * 用户ID
     **/
    private $teacherUserid;

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

    public function setTeacherUserid($teacherUserid)
    {
        $this->teacherUserid              = $teacherUserid;
        $this->apiParas["teacher_userid"] = $teacherUserid;
    }

    public function getTeacherUserid()
    {
        return $this->teacherUserid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.teacher.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->classId, "classId");
        RequestCheckUtil::checkNotNull($this->teacherUserid, "teacherUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
