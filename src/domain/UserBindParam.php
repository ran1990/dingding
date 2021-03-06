<?php

namespace life2016\dingtalk\domain;


/**
 * 请求业务对象
 * @author auto create
 */
class UserBindParam
{

    /**
     * 扩展字段
     **/
    public $extension;

    /**
     * 主帐号ID
     **/
    public $outer_id;

    /**
     * 主帐号名称
     **/
    public $outer_nick;

    /**
     * 子帐号ID
     **/
    public $sub_outer_id;

    /**
     * 子帐号名称
     **/
    public $sub_outer_nick;

    /**
     * token
     **/
    public $token;
}

?>