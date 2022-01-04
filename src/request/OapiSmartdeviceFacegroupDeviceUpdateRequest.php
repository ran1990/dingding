<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.smartdevice.facegroup.device.update request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceFacegroupDeviceUpdateRequest
{
    /**
     * 需新增的设备id列表
     **/
    private $addDeviceIds;

    /**
     * 业务id
     **/
    private $bizId;

    /**
     * 需移除的设备id列表
     **/
    private $delDeviceIds;

    private $apiParas = [];

    public function setAddDeviceIds($addDeviceIds)
    {
        $this->addDeviceIds               = $addDeviceIds;
        $this->apiParas["add_device_ids"] = $addDeviceIds;
    }

    public function getAddDeviceIds()
    {
        return $this->addDeviceIds;
    }

    public function setBizId($bizId)
    {
        $this->bizId              = $bizId;
        $this->apiParas["biz_id"] = $bizId;
    }

    public function getBizId()
    {
        return $this->bizId;
    }

    public function setDelDeviceIds($delDeviceIds)
    {
        $this->delDeviceIds               = $delDeviceIds;
        $this->apiParas["del_device_ids"] = $delDeviceIds;
    }

    public function getDelDeviceIds()
    {
        return $this->delDeviceIds;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartdevice.facegroup.device.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->addDeviceIds, 20, "addDeviceIds");
        RequestCheckUtil::checkNotNull($this->bizId, "bizId");
        RequestCheckUtil::checkMaxLength($this->bizId, 23, "bizId");
        RequestCheckUtil::checkMaxListSize($this->delDeviceIds, 20, "delDeviceIds");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
