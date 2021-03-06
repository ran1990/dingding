<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.chatbot.pictureurl.get request
 *
 * @author auto create
 * @since 1.0, 2020.09.25
 */
class OapiChatbotPictureurlGetRequest
{
    /**
     * 图片临时下载码
     **/
    private $downloadCode;

    private $apiParas = [];

    public function setDownloadCode($downloadCode)
    {
        $this->downloadCode              = $downloadCode;
        $this->apiParas["download_code"] = $downloadCode;
    }

    public function getDownloadCode()
    {
        return $this->downloadCode;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.chatbot.pictureurl.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->downloadCode, "downloadCode");
        RequestCheckUtil::checkMaxLength($this->downloadCode, 4000, "downloadCode");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
