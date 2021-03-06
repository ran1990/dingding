<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.ats.evaluate.jobmatch.finish request
 *
 * @author auto create
 * @since 1.0, 2020.08.10
 */
class OapiAtsEvaluateJobmatchFinishRequest
{
    /**
     * 招聘业务标识
     **/
    private $bizCode;

    /**
     * 测评结论
     **/
    private $conclusion;

    /**
     * 请求扩展字段
     **/
    private $extData;

    /**
     * 外部测评系统测评记录id，全局唯一
     **/
    private $outerEvaluateId;

    /**
     * 公网可以下载，不需要鉴权的评测报告下载地址，最大长度1024
     **/
    private $reportDownloadUrl;

    /**
     * json格式的测评结果
     **/
    private $result;

    /**
     * 岗位匹配得分，小数点后保留2位
     **/
    private $score;

    private $apiParas = [];

    public function setBizCode($bizCode)
    {
        $this->bizCode              = $bizCode;
        $this->apiParas["biz_code"] = $bizCode;
    }

    public function getBizCode()
    {
        return $this->bizCode;
    }

    public function setConclusion($conclusion)
    {
        $this->conclusion             = $conclusion;
        $this->apiParas["conclusion"] = $conclusion;
    }

    public function getConclusion()
    {
        return $this->conclusion;
    }

    public function setExtData($extData)
    {
        $this->extData              = $extData;
        $this->apiParas["ext_data"] = $extData;
    }

    public function getExtData()
    {
        return $this->extData;
    }

    public function setOuterEvaluateId($outerEvaluateId)
    {
        $this->outerEvaluateId               = $outerEvaluateId;
        $this->apiParas["outer_evaluate_id"] = $outerEvaluateId;
    }

    public function getOuterEvaluateId()
    {
        return $this->outerEvaluateId;
    }

    public function setReportDownloadUrl($reportDownloadUrl)
    {
        $this->reportDownloadUrl               = $reportDownloadUrl;
        $this->apiParas["report_download_url"] = $reportDownloadUrl;
    }

    public function getReportDownloadUrl()
    {
        return $this->reportDownloadUrl;
    }

    public function setResult($result)
    {
        $this->result             = $result;
        $this->apiParas["result"] = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setScore($score)
    {
        $this->score             = $score;
        $this->apiParas["score"] = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.ats.evaluate.jobmatch.finish";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->bizCode, "bizCode");
        RequestCheckUtil::checkNotNull($this->conclusion, "conclusion");
        RequestCheckUtil::checkNotNull($this->extData, "extData");
        RequestCheckUtil::checkNotNull($this->outerEvaluateId, "outerEvaluateId");
        RequestCheckUtil::checkNotNull($this->reportDownloadUrl, "reportDownloadUrl");
        RequestCheckUtil::checkNotNull($this->result, "result");
        RequestCheckUtil::checkNotNull($this->score, "score");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
