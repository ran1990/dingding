<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 请求对象
 * @author auto create
 */
class PrintVmClearRequest
{

    /**
     * 微应用agentId，ISV必填
     **/
    public $agent_id;

    /**
     * 流程code
     **/
    public $process_code;
}

?>