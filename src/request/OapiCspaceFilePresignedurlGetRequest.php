<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.cspace.file.presignedurl.get request
 *
 * @author auto create
 * @since 1.0, 2020.11.18
 */
class OapiCspaceFilePresignedurlGetRequest
{
    /**
     * 钉盘文件ID
     **/
    private $dentryid;

    /**
     * 签名URL的有效期，不传的话为默认值15分钟
     **/
    private $expireSeconds;

    /**
     * 是否为内部调用，统一传false
     **/
    private $innerInvoke;

    /**
     * 钉盘空间ID
     **/
    private $spaceid;

    private $apiParas = [];

    public function setDentryid($dentryid)
    {
        $this->dentryid             = $dentryid;
        $this->apiParas["dentryid"] = $dentryid;
    }

    public function getDentryid()
    {
        return $this->dentryid;
    }

    public function setExpireSeconds($expireSeconds)
    {
        $this->expireSeconds              = $expireSeconds;
        $this->apiParas["expire_seconds"] = $expireSeconds;
    }

    public function getExpireSeconds()
    {
        return $this->expireSeconds;
    }

    public function setInnerInvoke($innerInvoke)
    {
        $this->innerInvoke              = $innerInvoke;
        $this->apiParas["inner_invoke"] = $innerInvoke;
    }

    public function getInnerInvoke()
    {
        return $this->innerInvoke;
    }

    public function setSpaceid($spaceid)
    {
        $this->spaceid             = $spaceid;
        $this->apiParas["spaceid"] = $spaceid;
    }

    public function getSpaceid()
    {
        return $this->spaceid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.cspace.file.presignedurl.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->dentryid, "dentryid");
        RequestCheckUtil::checkNotNull($this->spaceid, "spaceid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
