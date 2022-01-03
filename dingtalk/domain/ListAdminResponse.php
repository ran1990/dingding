<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 返回结果
 * @author auto create
 */
class ListAdminResponse
{

    /**
     * 管理员角色，1 主管理员 2 子管理员
     **/
    public $sys_level;

    /**
     * 用户id
     **/
    public $userid;
}

?>