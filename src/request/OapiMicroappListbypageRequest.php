<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.microapp.listbypage request
 *
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiMicroappListbypageRequest
{
    /**
     * 微应用id
     **/
    private $agentId;

    /**
     * 偏移量
     **/
    private $offset;

    /**
     * 大小
     **/
    private $size;

    private $apiParas = [];

    public function setAgentId($agentId)
    {
        $this->agentId             = $agentId;
        $this->apiParas["agentId"] = $agentId;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }

    public function setOffset($offset)
    {
        $this->offset             = $offset;
        $this->apiParas["offset"] = $offset;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function setSize($size)
    {
        $this->size             = $size;
        $this->apiParas["size"] = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.microapp.listbypage";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->agentId, "agentId");
        RequestCheckUtil::checkNotNull($this->offset, "offset");
        RequestCheckUtil::checkNotNull($this->size, "size");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
