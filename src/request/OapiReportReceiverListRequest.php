<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.report.receiver.list request
 *
 * @author auto create
 * @since 1.0, 2020.06.19
 */
class OapiReportReceiverListRequest
{
    /**
     * 分页查询的游标，最开始传0，后续传返回参数中next_cursor的值，默认值为0
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

    public function getApiMethodName()
    {
        return "dingtalk.oapi.report.receiver.list";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->reportId, "reportId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
