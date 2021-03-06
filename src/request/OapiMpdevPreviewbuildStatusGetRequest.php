<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.mpdev.previewbuild.status.get request
 *
 * @author auto create
 * @since 1.0, 2020.10.15
 */
class OapiMpdevPreviewbuildStatusGetRequest
{
    /**
     * 小程序ID
     **/
    private $miniappId;

    /**
     * 任务ID
     **/
    private $taskId;

    private $apiParas = [];

    public function setMiniappId($miniappId)
    {
        $this->miniappId              = $miniappId;
        $this->apiParas["miniapp_id"] = $miniappId;
    }

    public function getMiniappId()
    {
        return $this->miniappId;
    }

    public function setTaskId($taskId)
    {
        $this->taskId              = $taskId;
        $this->apiParas["task_id"] = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.mpdev.previewbuild.status.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->miniappId, "miniappId");
        RequestCheckUtil::checkNotNull($this->taskId, "taskId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
