<?php

namespace fangchaogang\uniontk\jingdong\request;

use fangchaogang\uniontk\jingdong\RequestInterface;

/**
 * Class JdUnionCouponQueryRequest
 * @package fangchaogang\uniontk\jingdong\request
 */
class JdUnionCouponQueryRequest implements RequestInterface
{
    /**
     * 优惠券领取情况查询接口【申请】
     * @url https://union.jd.com/#/openplatform/api/627
     * @var string
     */
    private $method = 'jd.union.open.coupon.query';

    /**
     * 优惠券链接集合
     * @var
     */
    private $couponUrls;

    /**
     * @return mixed
     */
    public function getCouponUrls()
    {
        return $this->couponUrls;
    }

    /**
     * @param mixed $couponUrls
     */
    public function setCouponUrls(array $couponUrls): void
    {
        $this->couponUrls = $couponUrls;
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {

        return json_encode([
            'couponUrls' => $this->couponUrls
        ]);
    }


}