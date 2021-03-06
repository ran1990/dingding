<?php

namespace life2016\dingtalk\domain;


/**
 * 查询参数
 * @author auto create
 */
class QueryCorpEmployeeProductionTeamDto
{

    /**
     * 是否包含未激活或者离职状态
     **/
    public $include_inactive;

    /**
     * 资产ID
     **/
    public $tenant_id;

    /**
     * uicic 列表
     **/
    public $uic_ids;

    /**
     * userid
     **/
    public $userid;
}

?>