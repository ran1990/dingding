<?php

namespace life2016\dingtalk\domain;


/**
 * 业务返回结果
 * @author auto create
 */
class TokenVO
{

    /**
     * 授权超时时间
     **/
    public $expire_time;

    /**
     * 授权码
     **/
    public $token;
}

?>