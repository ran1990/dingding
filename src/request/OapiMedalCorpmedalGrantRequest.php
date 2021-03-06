<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.medal.corpmedal.grant request
 *
 * @author auto create
 * @since 1.0, 2019.10.31
 */
class OapiMedalCorpmedalGrantRequest
{
    /**
     * 勋章模板ID
     **/
    private $templateId;

    /**
     * 员工ID
     **/
    private $userid;

    private $apiParas = [];

    public function setTemplateId($templateId)
    {
        $this->templateId              = $templateId;
        $this->apiParas["template_id"] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.medal.corpmedal.grant";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->templateId, "templateId");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
