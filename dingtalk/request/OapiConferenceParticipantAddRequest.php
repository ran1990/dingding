<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.conference.participant.add request
 *
 * @author auto create
 * @since 1.0, 2019.07.03
 */
class OapiConferenceParticipantAddRequest
{
    /**
     * 会务id
     **/
    private $conferenceId;

    /**
     * 参会人id列表
     **/
    private $participantUseridList;

    /**
     * 操作用户id
     **/
    private $userid;

    private $apiParas = [];

    public function setConferenceId($conferenceId)
    {
        $this->conferenceId              = $conferenceId;
        $this->apiParas["conference_id"] = $conferenceId;
    }

    public function getConferenceId()
    {
        return $this->conferenceId;
    }

    public function setParticipantUseridList($participantUseridList)
    {
        $this->participantUseridList               = $participantUseridList;
        $this->apiParas["participant_userid_list"] = $participantUseridList;
    }

    public function getParticipantUseridList()
    {
        return $this->participantUseridList;
    }

    public function setUserid($userid)
    {
        $this->userid             = $userid;
        $this->apiParas["userid"] = $userid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.conference.participant.add";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->conferenceId, "conferenceId");
        RequestCheckUtil::checkNotNull($this->participantUseridList, "participantUseridList");
        RequestCheckUtil::checkMaxListSize($this->participantUseridList, 1000, "participantUseridList");
        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}