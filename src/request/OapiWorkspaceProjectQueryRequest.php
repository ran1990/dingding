<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.workspace.project.query request
 *
 * @author auto create
 * @since 1.0, 2020.11.06
 */
class OapiWorkspaceProjectQueryRequest
{

    private $apiParas = [];

    public function getApiMethodName()
    {
        return "dingtalk.oapi.workspace.project.query";
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
