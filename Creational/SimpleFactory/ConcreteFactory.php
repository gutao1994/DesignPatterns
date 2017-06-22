<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * ConcreteFactory��
 */
class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;

    /**
     * �����������ע���Լ��ĳ�������
     */
    public function __construct()
    {
        $this->typeList = array(
            'bicycle' => __NAMESPACE__ . '\Bicycle',
            'other' => __NAMESPACE__ . '\Scooter'
        );
    }

    /**
     * ��������
     *
     * @param string $type a known type key
     *
     * @return VehicleInterface a new instance of VehicleInterface
     * @throws \InvalidArgumentException
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];

        return new $className();
    }
}