<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 请求对象
 * @author auto create
 */
class DeleteProcessRequest
{

    /**
     * 微应用agentId，ISV必填
     **/
    public $agentid;

    /**
     * 是否清理运行中的任务
     **/
    public $clean_running_task;

    /**
     * 流程code
     **/
    public $process_code;
}

?>