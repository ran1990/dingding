<?php

namespace life2016\dingtalk\domain;


/**
 * 设备查询对象
 * @author auto create
 */
class DeviceQueryVo
{

    /**
     * 设备id，和设备名称不能同时为空
     **/
    public $device_id;

    /**
     * 设备名称，和设备id不能同时为空
     **/
    public $device_name;

    /**
     * 产品唯一编码
     **/
    public $pk;
}

?>