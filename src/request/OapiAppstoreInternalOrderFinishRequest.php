<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.appstore.internal.order.finish request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiAppstoreInternalOrderFinishRequest
{
    /**
     * 内购订单号
     **/
    private $bizOrderId;

    private $apiParas = [];

    public function setBizOrderId($bizOrderId)
    {
        $this->bizOrderId               = $bizOrderId;
        $this->apiParas["biz_order_id"] = $bizOrderId;
    }

    public function getBizOrderId()
    {
        return $this->bizOrderId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.appstore.internal.order.finish";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->bizOrderId, "bizOrderId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
