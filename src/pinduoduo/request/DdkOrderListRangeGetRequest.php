<?php
namespace fangchaogang\uniontk\pinduoduo\request;

use fangchaogang\uniontk\pinduoduo\RequestInterface;

class DdkOrderListRangeGetRequest implements RequestInterface
{
    /**
     * 用时间段查询推广订单接口
     * @var string
     */
    private $type = 'pdd.ddk.order.list.range.get';

    private $startTime;

    private $endTime;

    private $pageSize;

    private $lastOrderId;



    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return mixed
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    /**
     * @param mixed $lastOrderId
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }


    public function getParams()
    {
        $params = [
            'type'       => $this->type,
            'start_time' => $this->startTime,
            'end_time'   => $this->endTime,
            'page_size'  => $this->pageSize,
            'last_order_id' => $this->lastOrderId
        ];
        return array_filter($params);
    }
}
