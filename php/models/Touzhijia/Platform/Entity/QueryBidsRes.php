<?php

/**
 * 查询标的信息响应包定义
 * 
 * @category   Touzhijia
 * @package    Touzhijia_Platform_Entity
 * @author     JamesQin <qinwq@touzhijia.com>
 * @copyright  (c) 2014-2016 Touzhijia Financial Information Ltd. Inc. (http://www.touzhijia.com)
 * @version    1.0.0 2016-03-30 16:01:07
 */
class Touzhijia_Platform_Entity_QueryBidsRes extends Touzhijia_Platform_Entity_BaseMsg
{
	const SERVICE_NAME = 'queryBids';
	
	public function reset()
	{
		$this->_arrMsg = array(
				'service' => self::SERVICE_NAME,	// string, service name
				'body'    => array()			// array of BidInfo
				);
	}


	/**
	 * 添加一行记录
	 *
	 * @param Touzhijia_Platform_Entity_BidInfo $info
	 * @return bool true:成功 false:失败
	 */
	public function addBidInfo($info)
	{
		if (!$info instanceof Touzhijia_Platform_Entity_BidInfo) {
			return false;
		}

		$this->_arrMsg['body'][] = $info->getAll();
		return true;
	}
	
}
