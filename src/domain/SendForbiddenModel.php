<?php

namespace life2016\dingtalk\domain;


/**
 * 推送被禁止的具体原因
 * @author auto create
 */
class SendForbiddenModel
{

    /**
     * 流控code
     **/
    public $code;

    /**
     * 流控阀值
     **/
    public $count;

    /**
     * 员工userId
     **/
    public $userid;
}

?>