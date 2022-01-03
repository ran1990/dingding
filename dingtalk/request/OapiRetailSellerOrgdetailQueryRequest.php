<?php

namespace common\components\dingding\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.retail.seller.orgdetail.query request
 *
 * @author auto create
 * @since 1.0, 2020.01.07
 */
class OapiRetailSellerOrgdetailQueryRequest
{
    /**
     * staffId
     **/
    private $userid;

    private $apiParas = [];

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
        return "dingtalk.oapi.retail.seller.orgdetail.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->userid, "userid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }
}
