<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.homework.student.comment.list request
 *
 * @author auto create
 * @since 1.0, 2020.04.30
 */
class OapiEduHomeworkStudentCommentListRequest
{
    /**
     * 业务编码
     **/
    private $bizCode;

    /**
     * 班级ID
     **/
    private $classId;

    /**
     * 作业ID
     **/
    private $hwId;

    /**
     * 学生ID
     **/
    private $studentId;

    /**
     * 老师userID
     **/
    private $teacherUserid;

    private $apiParas = [];

    public function setBizCode($bizCode)
    {
        $this->bizCode              = $bizCode;
        $this->apiParas["biz_code"] = $bizCode;
    }

    public function getBizCode()
    {
        return $this->bizCode;
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

    public function setHwId($hwId)
    {
        $this->hwId              = $hwId;
        $this->apiParas["hw_id"] = $hwId;
    }

    public function getHwId()
    {
        return $this->hwId;
    }

    public function setStudentId($studentId)
    {
        $this->studentId              = $studentId;
        $this->apiParas["student_id"] = $studentId;
    }

    public function getStudentId()
    {
        return $this->studentId;
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
        return "dingtalk.oapi.edu.homework.student.comment.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->bizCode, "bizCode");
        RequestCheckUtil::checkNotNull($this->classId, "classId");
        RequestCheckUtil::checkNotNull($this->hwId, "hwId");
        RequestCheckUtil::checkNotNull($this->studentId, "studentId");
        RequestCheckUtil::checkNotNull($this->teacherUserid, "teacherUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
