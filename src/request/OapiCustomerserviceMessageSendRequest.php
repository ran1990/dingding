<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.customerservice.message.send request
 *
 * @author auto create
 * @since 1.0, 2021.03.29
 */
class OapiCustomerserviceMessageSendRequest
{
    /**
     * 消息对象
     **/
    private $message;

    private $apiParas = [];

    public function setMessage($message)
    {
        $this->message             = $message;
        $this->apiParas["message"] = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.customerservice.message.send";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
