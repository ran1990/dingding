<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.smartdevice.facegroup.removeall request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiSmartdeviceFacegroupRemoveallRequest
{
    /**
     * 业务id
     **/
    private $bizId;

    private $apiParas = [];

    public function setBizId($bizId)
    {
        $this->bizId              = $bizId;
        $this->apiParas["biz_id"] = $bizId;
    }

    public function getBizId()
    {
        return $this->bizId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.smartdevice.facegroup.removeall";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->bizId, "bizId");
        RequestCheckUtil::checkMaxLength($this->bizId, 23, "bizId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
