<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.appstore.internal.order.get request
 *
 * @author auto create
 * @since 1.0, 2021.03.16
 */
class OapiAppstoreInternalOrderGetRequest
{
    /**
     * 内购商品订单号
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
        return "dingtalk.oapi.appstore.internal.order.get";
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
