<?php

namespace life2016\dingding\dingtalk\domain;


/**
 * 消息的at人信息
 * @author auto create
 */
class OpenGroupMessageAtUserDto
{

    /**
     * unionId（如果没有userId则提供unionId)
     **/
    public $unionid;

    /**
     * userId
     **/
    public $userid;
}

?>