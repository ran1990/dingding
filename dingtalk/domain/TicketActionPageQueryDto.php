<?php

namespace common\components\dingding\dingtalk\domain;


/**
 * 分页查询条件
 * @author auto create
 */
class TicketActionPageQueryDto
{

    /**
     * 查询游标
     **/
    public $cursor;

    /**
     * 实例id
     **/
    public $open_instance_id;

    /**
     * 1智能客服
     **/
    public $production_type;

    /**
     * 分页大小
     **/
    public $size;

    /**
     * 工单id
     **/
    public $ticket_id;
}

?>