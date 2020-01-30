<?php
namespace fangchaogang\uniontk\suning\request\netalliance;

use fangchaogang\uniontk\suning\SelectSuningRequest;
use fangchaogang\uniontk\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-7-12
 */
class UnionInfomationQueryRequest  extends SelectSuningRequest{

	/**
	 *
	 */
	private $adBookId;



	public function getAdBookId() {
		return $this->adBookId;
	}

	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}



	public function getApiMethodName(){
		return 'suning.netalliance.unioninfomation.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
	}

	public function getBizName(){
		return "queryUnionInfomation";
	}

}

?>
