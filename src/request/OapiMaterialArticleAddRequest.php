<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.material.article.add request
 *
 * @author auto create
 * @since 1.0, 2019.12.24
 */
class OapiMaterialArticleAddRequest
{
    /**
     * 文章参数对象
     **/
    private $article;

    /**
     * 服务号的unionid
     **/
    private $unionid;

    private $apiParas = [];

    public function setArticle($article)
    {
        $this->article             = $article;
        $this->apiParas["article"] = $article;
    }

    public function getArticle()
    {
        return $this->article;
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
        return "dingtalk.oapi.material.article.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->unionid, "unionid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
