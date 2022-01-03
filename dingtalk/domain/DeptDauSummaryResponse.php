<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 结果对象
 * @author auto create
 */
class DeptDauSummaryResponse
{

    /**
     * 数据列表
     **/
    public $data;

    /**
     * 是否有下一页；true则存在更多分页
     **/
    public $has_more;

    /**
     * 下一次请求的分页游标
     **/
    public $next_cursor;
}

?>