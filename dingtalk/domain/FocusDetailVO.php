<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 投屏数据列表
 * @author auto create
 */
class FocusDetailVO
{

    /**
     * 投屏时间，单位毫秒
     **/
    public $create_date;

    /**
     * 部门全称
     **/
    public $dept_full_name;

    /**
     * 投屏设备呢称
     **/
    public $nick_name;

    /**
     * 会议室
     **/
    public $room;

    /**
     * 用户名
     **/
    public $user_name;
}

?>