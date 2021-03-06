<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.corp.ext.list request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class CorpExtListRequest
{
    /**
     * 偏移位置
     **/
    private $offset;

    /**
     * 分页大小, 最大100
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
        return "dingtalk.corp.ext.list";
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
