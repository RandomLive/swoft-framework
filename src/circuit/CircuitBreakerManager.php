<?php

namespace swoft\circuit;

/**
 * 熔断器管理器
 *
 * @uses      CircuitBreakerManager
 * @version   2017年07月02日
 * @author    lilin <lilin@ugirls.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 5.x {@link http://www.php.net/license/3_0.txt}
 */
class CircuitBreakerManager extends AbstractCircuitBreaker
{
    public function init()
    {

    }
    /**
     * @var array 熔断器列表
     */
    private $cricuitBreakerList = [];

    public function getCricuitBreaker($serviceName)
    {
        if (!isset($this->cricuitBreakerList[$serviceName])) {
            $this->cricuitBreakerList[$serviceName] = new CircuitBreaker($this);
        }

        return $this->cricuitBreakerList[$serviceName];
    }
}