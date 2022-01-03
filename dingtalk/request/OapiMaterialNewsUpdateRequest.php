<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.material.news.update request
 *
 * @author auto create
 * @since 1.0, 2019.07.04
 */
class OapiMaterialNewsUpdateRequest
{
    /**
     * 文章列表
     **/
    private $articles;

    /**
     * 消息卡片素材id
     **/
    private $mediaId;

    /**
     * 服务号的unionid
     **/
    private $unionid;

    private $apiParas = [];

    public function setArticles($articles)
    {
        $this->articles             = $articles;
        $this->apiParas["articles"] = $articles;
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function setMediaId($mediaId)
    {
        $this->mediaId              = $mediaId;
        $this->apiParas["media_id"] = $mediaId;
    }

    public function getMediaId()
    {
        return $this->mediaId;
    }

    public function setUnionid($unionid)
    {
        $this->unionid             = $unionid;
        $this->apiParas["unionid"] = $unionid;
    }

    public function getUnionid()
    {
        return $this->unionid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.material.news.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->mediaId, "mediaId");
        RequestCheckUtil::checkNotNull($this->unionid, "unionid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
