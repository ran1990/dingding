<?php

namespace life2016\dingtalk\domain;


/**
 * 结果集
 * @author auto create
 */
class GroupMetaInfo
{

    /**
     * 组里面的字段集合
     **/
    public $field_list;

    /**
     * 字段组ID
     **/
    public $group_id;

    /**
     * 是否支持明细
     **/
    public $has_detail;
}

?>