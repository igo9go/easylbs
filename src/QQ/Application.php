<?php

/*
 * This file is part of the gundy/easylbs.
 *
 * (c) Gundy <62687565@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Gundy\Easylbs\QQ;

use Gundy\Easylbs\Kernel\Exceptions\GatewayErrorException;
use Gundy\Easylbs\Kernel\Support\Config;
use Gundy\Easylbs\Kernel\Traits\HasHttpRequest;

class Application
{
    use HasHttpRequest;

    protected $config;

    public function __construct(array $config)
    {
        $this->config = new Config($config);
    }

    /**
     * 用于获取输入关键字的补完与提示，帮助用户快速输入.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function searchPlace(array $params)
    {
        return $this->sendRequest('/ws/place/v1/search', $params);
    }

    /**
     * 本接口提供由坐标到坐标所在位置的文字描述的转换。输入坐标返回地理位置信息和附近poi列表.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function resolveAddress(array $params)
    {
        return $this->sendRequest('/ws/geocoder/v1', $params);
    }

    /**
     * 距离计算.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function distance(array $params)
    {
        return $this->sendRequest('/ws/distance/v1', $params);
    }

    /**
     * 距离矩阵.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function matrixDistance(array $params)
    {
        return $this->sendRequest('/ws/distance/v1/matrix', $params);
    }

    /**
     * 从其它地图供应商坐标系或标准GPS坐标系，批量转换到腾讯地图坐标系.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function coordTranslate(array $params)
    {
        return $this->sendRequest('/ws/coord/v1/translate', $params);
    }

    /**
     * IP地址获取其当前所在地理位置，精确到市级.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function IpLocation(array $params)
    {
        return $this->sendRequest('/ws/coord/v1/translate', $params);
    }

    /**
     * 驾车（driving）路线规划.
     *
     * @param array $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function drivingDirection(array $params)
    {
        return $this->sendRequest('/ws/direction/v1/driving', $params);
    }

    /**
     * 发送请求
     *
     * @param $path
     * @param $params
     *
     * @return array
     *
     * @throws GatewayErrorException
     */
    public function sendRequest($path, $params)
    {
        $result = $this->get($path, $this->formatParams($params));
        if (0 !== $result['status']) {
            throw new GatewayErrorException($result['message'], $result['status'], $result);
        }

        return $result;
    }

    protected function formatParams(array $params)
    {
        $params['key'] = $this->config->get('key');

        return $params;
    }

    protected function getBaseUri()
    {
        return 'https://apis.map.qq.com';
    }
}
