<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.attendance.groups.query request
 *
 * @author auto create
 * @since 1.0, 2021.02.22
 */
class OapiAttendanceGroupsQueryRequest
{
    /**
     * 上一批次最后一个id，默认空
     **/
    private $cursor;

    /**
     * 操作人userId
     **/
    private $opUserid;

    /**
     * 分页大小
     **/
    private $size;

    private $apiParas = [];

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
        return "dingtalk.oapi.attendance.groups.query";
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
