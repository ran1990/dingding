<?php

namespace life2016\dingtalk\domain;


/**
 * 列表查询对象
 * @author auto create
 */
class PageQueryVo
{

    /**
     * 游标地址,第一页填0
     **/
    public $cursor;

    /**
     * 产品唯一编码
     **/
    public $pk;

    /**
     * 分页大小，最大20
     **/
    public $size;
}

?>