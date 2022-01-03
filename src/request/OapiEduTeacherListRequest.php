<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.teacher.list request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiEduTeacherListRequest
{
    /**
     * 班级ID
     **/
    private $classId;

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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.teacher.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->classId, "classId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
