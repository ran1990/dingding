<?php

namespace life2016\dingtalk\domain;


/**
 * 被@人的手机号
 * @author auto create
 */
class At
{

    /**
     * 被@人的手机号
     **/
    public $at_mobiles;

    /**
     * 被@人的工号
     **/
    public $at_user_ids;

    /**
     * @所有人时:true,否则为:false
     **/
    public $is_at_all;
}

?>