<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.course.participant.remove request
 *
 * @author auto create
 * @since 1.0, 2020.08.24
 */
class OapiEduCourseParticipantRemoveRequest
{
    /**
     * 课程编码
     **/
    private $courseCode;

    /**
     * 当前用户ID
     **/
    private $opUserid;

    /**
     * 参与方的组织CropId
     **/
    private $participantCorpid;

    /**
     * 参与方ID。participant_type=1时，participant_id表示用户ID；participant_type=2时，participant_id表示部门ID；participant_type=3时，participant_id表示组织ID；
     **/
    private $participantId;

    /**
     * 1：用户、2：部门（对应家校通讯录中的班级、年级。详情请参考https://ding-doc.dingtalk.com/doc#/serverapi3/gga05a/z3y0h）、3：组织
     **/
    private $participantType;

    /**
     * student：学生、guardian: 监护人、teacher：老师（注意：授课老师不支持移除）
     **/
    private $role;

    private $apiParas = [];

    public function setCourseCode($courseCode)
    {
        $this->courseCode              = $courseCode;
        $this->apiParas["course_code"] = $courseCode;
    }

    public function getCourseCode()
    {
        return $this->courseCode;
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

    public function setParticipantCorpid($participantCorpid)
    {
        $this->participantCorpid              = $participantCorpid;
        $this->apiParas["participant_corpid"] = $participantCorpid;
    }

    public function getParticipantCorpid()
    {
        return $this->participantCorpid;
    }

    public function setParticipantId($participantId)
    {
        $this->participantId              = $participantId;
        $this->apiParas["participant_id"] = $participantId;
    }

    public function getParticipantId()
    {
        return $this->participantId;
    }

    public function setParticipantType($participantType)
    {
        $this->participantType              = $participantType;
        $this->apiParas["participant_type"] = $participantType;
    }

    public function getParticipantType()
    {
        return $this->participantType;
    }

    public function setRole($role)
    {
        $this->role             = $role;
        $this->apiParas["role"] = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.course.participant.remove";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->courseCode, "courseCode");
        RequestCheckUtil::checkNotNull($this->opUserid, "opUserid");
        RequestCheckUtil::checkNotNull($this->participantCorpid, "participantCorpid");
        RequestCheckUtil::checkNotNull($this->participantId, "participantId");
        RequestCheckUtil::checkNotNull($this->participantType, "participantType");
        RequestCheckUtil::checkNotNull($this->role, "role");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
