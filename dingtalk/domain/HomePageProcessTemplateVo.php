<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * result
 * @author auto create
 */
class HomePageProcessTemplateVo
{

    /**
     * 下一次分页调用的offset值，当返回结果里没有nextCursor时，表示分页结束
     **/
    public $next_cursor;

    /**
     * list
     **/
    public $process_list;
}

?>