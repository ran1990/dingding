<?php

namespace life2016\dingtalk\domain;


/**
 * request
 * @author auto create
 */
class ProdWorkstationUpsertDto
{

    /**
     * 类目code
     **/
    public $category_code;

    /**
     * 类目子code
     **/
    public $category_sub_code;

    /**
     * 兴趣点code
     **/
    public $poi_code;

    /**
     * 站位code
     **/
    public $prod_workstation_code;

    /**
     * 站位name
     **/
    public $prod_workstation_name;

    /**
     * 租户ID
     **/
    public $tenant_id;

    /**
     * userid
     **/
    public $userid;
}

?>