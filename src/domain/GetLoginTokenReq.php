<?php

namespace life2016\dingtalk\domain;


/**
 * 获取免登token请求
 * @author auto create
 */
class GetLoginTokenReq
{

    /**
     * 渠道类型
     **/
    public $channel;

    /**
     * 二方账号
     **/
    public $id;
}

?>