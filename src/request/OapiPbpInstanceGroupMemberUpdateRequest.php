<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.pbp.instance.group.member.update request
 *
 * @author auto create
 * @since 1.0, 2020.08.25
 */
class OapiPbpInstanceGroupMemberUpdateRequest
{
    /**
     * 同步参数
     **/
    private $syncParam;

    private $apiParas = [];

    public function setSyncParam($syncParam)
    {
        $this->syncParam              = $syncParam;
        $this->apiParas["sync_param"] = $syncParam;
    }

    public function getSyncParam()
    {
        return $this->syncParam;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.pbp.instance.group.member.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
