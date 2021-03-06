<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.call.getuserlist request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiCallGetuserlistRequest
{
    /**
     * ๅ็งป้
     **/
    private $offset;

    /**
     * size
     **/
    private $size;

    private $apiParas = [];

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
        return "dingtalk.oapi.call.getuserlist";
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
