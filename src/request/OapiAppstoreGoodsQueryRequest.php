<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.appstore.goods.query request
 *
 * @author auto create
 * @since 1.0, 2021.10.12
 */
class OapiAppstoreGoodsQueryRequest
{
    /**
     * 商品码
     **/
    private $goodsCode;

    private $apiParas = [];

    public function setGoodsCode($goodsCode)
    {
        $this->goodsCode              = $goodsCode;
        $this->apiParas["goods_code"] = $goodsCode;
    }

    public function getGoodsCode()
    {
        return $this->goodsCode;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.appstore.goods.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->goodsCode, "goodsCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
