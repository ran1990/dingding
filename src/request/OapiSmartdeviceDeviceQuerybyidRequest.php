<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.smartdevice.device.querybyid request
 *
 * @author auto create
 * @since 1.0, 2020.05.19
 */
class OapiSmartdeviceDeviceQuerybyidRequest
{
    /**
     * 设备查询对象
     **/
    private $deviceQueryVo;

    private $apiParas = [];

    public function setDeviceQueryVo($deviceQueryVo)
    {
        $this->deviceQueryVo               = $deviceQueryVo;
        $this->apiParas["device_query_vo"] = $deviceQueryVo;
    }

    public function getDeviceQueryVo()
    {
        return $this->deviceQueryVo;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartdevice.device.querybyid";
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
