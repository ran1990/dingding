<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.hire.bizflow.start request
 *
 * @author auto create
 * @since 1.0, 2020.09.21
 */
class OapiHireBizflowStartRequest
{
    /**
     * 职位id
     **/
    private $jobId;

    /**
     * 操作人userId
     **/
    private $opUserid;

    /**
     * 简历id
     **/
    private $resumeId;

    private $apiParas = [];

    public function setJobId($jobId)
    {
        $this->jobId              = $jobId;
        $this->apiParas["job_id"] = $jobId;
    }

    public function getJobId()
    {
        return $this->jobId;
    }

    public function setOpUserid($opUserid)
    {
        $this->opUserid              = $opUserid;
        $this->apiParas["op_userid"] = $opUserid;
    }

    public function getOpUserid()
    {
        return $this->opUserid;
    }

    public function setResumeId($resumeId)
    {
        $this->resumeId              = $resumeId;
        $this->apiParas["resume_id"] = $resumeId;
    }

    public function getResumeId()
    {
        return $this->resumeId;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.hire.bizflow.start";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->jobId, "jobId");
        RequestCheckUtil::checkNotNull($this->opUserid, "opUserid");
        RequestCheckUtil::checkNotNull($this->resumeId, "resumeId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
