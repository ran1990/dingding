<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.corp.device.manage.querylist request
 *
 * @author auto create
 * @since 1.0, 2019.08.14
 */
class CorpDeviceManageQuerylistRequest
{
    /**
     * 分页拉取设备列表的游标，首次拉取可传Null或者0
     **/
    private $cursor;

    /**
     * 设备服务商ID
     **/
    private $deviceServiceId;

    /**
     * 单次请求的大小，最大不超过20
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

    public function setDeviceServiceId($deviceServiceId)
    {
        $this->deviceServiceId               = $deviceServiceId;
        $this->apiParas["device_service_id"] = $deviceServiceId;
    }

    public function getDeviceServiceId()
    {
        return $this->deviceServiceId;
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
        return "dingtalk.corp.device.manage.querylist";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->cursor, "cursor");
        RequestCheckUtil::checkNotNull($this->deviceServiceId, "deviceServiceId");
        RequestCheckUtil::checkNotNull($this->size, "size");
        RequestCheckUtil::checkMaxValue($this->size, 20, "size");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
