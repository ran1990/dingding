<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 入参
 * @author auto create
 */
class InactiveOperationByConditionReq
{

    /**
     * 条件
     **/
    public $condition;

    /**
     * 订单id
     **/
    public $order_id;

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