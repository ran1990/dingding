<?php

namespace life2016\dingtalk\domain;


/**
 * 分页结果
 * @author auto create
 */
class IterablePage
{

    /**
     * 是否有下一页
     **/
    public $has_more;

    /**
     * 下一页的游标
     **/
    public $next_cursor;

    /**
     * 分页大小
     **/
    public $page_size;

    /**
     * 数据列表
     **/
    public $values;
}

?>