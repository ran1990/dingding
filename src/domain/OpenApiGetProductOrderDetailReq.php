<?php

namespace life2016\dingtalk\domain;


/**
 * 请求体
 * @author auto create
 */
class OpenApiGetProductOrderDetailReq
{

    /**
     * 生产订单id
     **/
    public $product_order_id;

    /**
     * 租户id
     **/
    public $tenant_id;

    /**
     * 用户id
     **/
    public $userid;
}

?>