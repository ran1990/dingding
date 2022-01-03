<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 是否成功
 * @author auto create
 */
class SendSmsMessageResult
{

    /**
     * 失败的userids
     **/
    public $failed_userid_list;

    /**
     * 无效的userids
     **/
    public $invalid_userid_list;

    /**
     * 成功的userids
     **/
    public $success_userid_list;
}

?>