<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.attendance.group.positions.remove request
 *
 * @author auto create
 * @since 1.0, 2021.04.25
 */
class OapiAttendanceGroupPositionsRemoveRequest
{
    /**
     * 考勤组id
     **/
    private $groupKey;

    /**
     * 操作人userId
     **/
    private $opUserid;

    /**
     * 位置key列表
     **/
    private $positionKeyList;

    private $apiParas = [];

    public function setGroupKey($groupKey)
    {
        $this->groupKey              = $groupKey;
        $this->apiParas["group_key"] = $groupKey;
    }

    public function getGroupKey()
    {
        return $this->groupKey;
    }

    public function setOpUserid($opUserid)
    {
        $this->opUserid              = $opUserid;
        $this->apiParas["op_userid"] = $opUserid;
    }

    public function getOpUserid()
    {
        return $this->opUserid;
    }

    public function setPositionKeyList($positionKeyList)
    {
        $this->positionKeyList               = $positionKeyList;
        $this->apiParas["position_key_list"] = $positionKeyList;
    }

    public function getPositionKeyList()
    {
        return $this->positionKeyList;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.attendance.group.positions.remove";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->groupKey, "groupKey");
        RequestCheckUtil::checkNotNull($this->positionKeyList, "positionKeyList");
        RequestCheckUtil::checkMaxListSize($this->positionKeyList, 100, "positionKeyList");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
