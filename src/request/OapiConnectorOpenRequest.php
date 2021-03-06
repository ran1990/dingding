<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.connector.open request
 *
 * @author auto create
 * @since 1.0, 2020.11.05
 */
class OapiConnectorOpenRequest
{
    /**
     * 连接器id
     **/
    private $connectorId;

    /**
     * 待开通连接器的企业id
     **/
    private $corpId;

    /**
     * 开通连接器的企业员工id
     **/
    private $creatorUserid;

    private $apiParas = [];

    public function setConnectorId($connectorId)
    {
        $this->connectorId              = $connectorId;
        $this->apiParas["connector_id"] = $connectorId;
    }

    public function getConnectorId()
    {
        return $this->connectorId;
    }

    public function setCorpId($corpId)
    {
        $this->corpId              = $corpId;
        $this->apiParas["corp_id"] = $corpId;
    }

    public function getCorpId()
    {
        return $this->corpId;
    }

    public function setCreatorUserid($creatorUserid)
    {
        $this->creatorUserid              = $creatorUserid;
        $this->apiParas["creator_userid"] = $creatorUserid;
    }

    public function getCreatorUserid()
    {
        return $this->creatorUserid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.connector.open";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->connectorId, "connectorId");
        RequestCheckUtil::checkNotNull($this->corpId, "corpId");
        RequestCheckUtil::checkNotNull($this->creatorUserid, "creatorUserid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
