<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.report.statistics.listbytype request
 *
 * @author auto create
 * @since 1.0, 2020.06.19
 */
class OapiReportStatisticsListbytypeRequest
{
    /**
     * 分页查询的游标，最开始传0，后续传返回参数中的next_cursor值，默认值为0
     **/
    private $offset;

    /**
     * 日志id
     **/
    private $reportId;

    /**
     * 分页参数，每页大小，最多传100，默认值为100
     **/
    private $size;

    /**
     * 查询类型 0:已读人员列表 1:评论人员列表 2:点赞人员列表
     **/
    private $type;

    private $apiParas = [];

    public function setOffset($offset)
    {
        $this->offset             = $offset;
        $this->apiParas["offset"] = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setReportId($reportId)
    {
        $this->reportId              = $reportId;
        $this->apiParas["report_id"] = $reportId;
    }

    public function getReportId()
    {
        return $this->reportId;
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

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.report.statistics.listbytype";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->reportId, "reportId");
        RequestCheckUtil::checkNotNull($this->type, "type");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
