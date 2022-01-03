<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.sceneservicegroup.groupset.create request
 *
 * @author auto create
 * @since 1.0, 2021.01.27
 */
class OapiSceneservicegroupGroupsetCreateRequest
{
    /**
     * 开放模板id
     **/
    private $groupTemplateid;

    /**
     * 群组名称
     **/
    private $groupsetName;

    /**
     * 开放团队id
     **/
    private $openTeamid;

    private $apiParas = [];

    public function setGroupTemplateid($groupTemplateid)
    {
        $this->groupTemplateid              = $groupTemplateid;
        $this->apiParas["group_templateid"] = $groupTemplateid;
    }

    public function getGroupTemplateid()
    {
        return $this->groupTemplateid;
    }

    public function setGroupsetName($groupsetName)
    {
        $this->groupsetName              = $groupsetName;
        $this->apiParas["groupset_name"] = $groupsetName;
    }

    public function getGroupsetName()
    {
        return $this->groupsetName;
    }

    public function setOpenTeamid($openTeamid)
    {
        $this->openTeamid              = $openTeamid;
        $this->apiParas["open_teamid"] = $openTeamid;
    }

    public function getOpenTeamid()
    {
        return $this->openTeamid;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.sceneservicegroup.groupset.create";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->openTeamid, "openTeamid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
