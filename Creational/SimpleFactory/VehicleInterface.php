<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * VehicleInterface �ǳ��ӽӿ�
 */
interface VehicleInterface
{
    /**
     * @param mixed $destination
     *
     * @return mixed
     */
    public function driveTo($destination);
}