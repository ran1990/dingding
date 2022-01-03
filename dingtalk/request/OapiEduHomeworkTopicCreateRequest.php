<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.edu.homework.topic.create request
 *
 * @author auto create
 * @since 1.0, 2021.04.27
 */
class OapiEduHomeworkTopicCreateRequest
{
    /**
     * 题目列表
     **/
    private $topicItems;

    private $apiParas = [];

    public function setTopicItems($topicItems)
    {
        $this->topicItems              = $topicItems;
        $this->apiParas["topic_items"] = $topicItems;
    }

    public function getTopicItems()
    {
        return $this->topicItems;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.edu.homework.topic.create";
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