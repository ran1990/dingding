<?php

namespace life2016\dingtalk\domain;


/**
 * 失败的处理结果
 * @author auto create
 */
class Failresult
{

    /**
     * 业务UK,唯一确定一条流水
     **/
    public $biz_uk;

    /**
     * 错误码
     **/
    public $error_code;

    /**
     * 错误信息
     **/
    public $error_msg;

    /**
     * 是否成功
     **/
    public $success;
}

?>