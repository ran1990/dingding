<?php

namespace life2016\dingtalk\request;


/**
 * dingtalk API: dingtalk.oapi.customerservice.ticket.create request
 *
 * @author auto create
 * @since 1.0, 2021.03.29
 */
class OapiCustomerserviceTicketCreateRequest
{
    /**
     * 工单对象
     **/
    private $ticketCreate;

    private $apiParas = [];

    public function setTicketCreate($ticketCreate)
    {
        $this->ticketCreate              = $ticketCreate;
        $this->apiParas["ticket_create"] = $ticketCreate;
    }

    public function getTicketCreate()
    {
        return $this->ticketCreate;
    }

    public function getApiMethodName()
    {
        return "dingtalk.oapi.customerservice.ticket.create";
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
