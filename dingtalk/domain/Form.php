<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 消息体的表单，最多显示6个，超过会被隐藏
 * @author auto create
 */
class Form
{

    /**
     * 消息体的关键字
     **/
    public $key;

    /**
     * 消息体的关键字对应的值
     **/
    public $value;
}

?>