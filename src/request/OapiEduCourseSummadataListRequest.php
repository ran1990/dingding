<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.edu.course.summadata.list request
 *
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiEduCourseSummadataListRequest
{
    /**
     * 数据类别编码数组
     **/
    private $categoryCodes;

    /**
     * 课程编码
     **/
    private $courseCode;

    /**
     * 分页游标，从0开始
     **/
    private $cursor;

    /**
     * 当前操作人的用户ID
     **/
    private $opUserid;

    /**
     * 分页大小
     **/
    private $size;

    private $apiParas = [];

    public function setCategoryCodes($categoryCodes)
    {
        $this->categoryCodes              = $categoryCodes;
        $this->apiParas["category_codes"] = $categoryCodes;
    }

    public function getCategoryCodes()
    {
        return $this->categoryCodes;
    }

    public function setCourseCode($courseCode)
    {
        $this->courseCode              = $courseCode;
        $this->apiParas["course_code"] = $courseCode;
    }

    public function getCourseCode()
    {
        return $this->courseCode;
    }

    public function setCursor($cursor)
    {
        $this->cursor             = $cursor;
        $this->apiParas["cursor"] = $cursor;
    }

    public function getCursor()
    {
        return $this->cursor;
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

    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"] = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.course.summadata.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->categoryCodes, "categoryCodes");
        RequestCheckUtil::checkMaxListSize($this->categoryCodes, 100, "categoryCodes");
        RequestCheckUtil::checkNotNull($this->courseCode, "courseCode");
        RequestCheckUtil::checkNotNull($this->cursor, "cursor");
        RequestCheckUtil::checkMinValue($this->cursor, 0, "cursor");
        RequestCheckUtil::checkNotNull($this->opUserid, "opUserid");
        RequestCheckUtil::checkNotNull($this->size, "size");
        RequestCheckUtil::checkMaxValue($this->size, 100, "size");
        RequestCheckUtil::checkMinValue($this->size, 1, "size");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
