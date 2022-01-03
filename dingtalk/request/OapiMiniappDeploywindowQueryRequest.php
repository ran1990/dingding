<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.miniapp.deploywindow.query request
 *
 * @author auto create
 * @since 1.0, 2020.07.28
 */
class OapiMiniappDeploywindowQueryRequest
{
    /**
     * 查询参数
     **/
    private $modelKey;

    private $apiParas = [];

    public function setModelKey($modelKey)
    {
        $this->modelKey              = $modelKey;
        $this->apiParas["model_key"] = $modelKey;
    }

    public function getModelKey()
    {
        return $this->modelKey;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.miniapp.deploywindow.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->modelKey, "modelKey");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
