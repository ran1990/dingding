<?php

namespace life2016\dingtalk\domain;


/**
 * 请求
 * @author auto create
 */
class ModifyGroupMemberInfoRequest
{

    /**
     * 群ID
     **/
    public $chatid;

    /**
     * 要修改的成员信息
     **/
    public $member_info;
}

?>