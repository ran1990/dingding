<?php

namespace life2016\dingtalk\request;

use life2016\dingtalk\top\RequestCheckUtil;


/**
 * dingtalk API: dingtalk.oapi.attendance.group.users.add request
 *
 * @author auto create
 * @since 1.0, 2020.04.09
 */
class OapiAttendanceGroupUsersAddRequest
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
     * 用户列表
     **/
    private $userIdList;

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

    public function setUserIdList($userIdList)
    {
        $this->userIdList               = $userIdList;
        $this->apiParas["user_id_list"] = $userIdList;
    }

    public function getUserIdList()
    {
        return $this->userIdList;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.attendance.group.users.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->groupKey, "groupKey");
        RequestCheckUtil::checkNotNull($this->userIdList, "userIdList");
        RequestCheckUtil::checkMaxListSize($this->userIdList, 100, "userIdList");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
