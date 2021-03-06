<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.live.grouplive.sharelist request
 *
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiLiveGroupliveSharelistRequest
{
    /**
     * 群id
     **/
    private $cid;

    /**
     * 直播uuid
     **/
    private $liveUuid;

    private $apiParas = [];

    public function setCid($cid)
    {
        $this->cid             = $cid;
        $this->apiParas["cid"] = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

    public function setLiveUuid($liveUuid)
    {
        $this->liveUuid              = $liveUuid;
        $this->apiParas["live_uuid"] = $liveUuid;
    }

    public function getLiveUuid()
    {
        return $this->liveUuid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.live.grouplive.sharelist";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->cid, "cid");
        RequestCheckUtil::checkNotNull($this->liveUuid, "liveUuid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
