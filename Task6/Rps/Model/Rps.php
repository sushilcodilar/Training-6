<?php

namespace Task6\Rps\Model;

use Task6\Rps\Api\Data\RpsEntityInterface;

class Rps extends \Magento\Framework\Model\AbstractModel implements RpsEntityInterface
{
    protected function _construct()
    {
        $this->_init("Task6\Rps\Model\ResourceModel\Rps");
    }


    public function getEntityId():int
    {
        return $this->getData(self::ID);
    }

    public function getFirstName(): string
    {
        return $this->getData(self::FIRSTNAME);
    }

    public function getLastName()
    {
        return $this->getData(self::LASTNAME);
    }

    public function getEmail(): string
    {
        return $this->getData(self::EMAIL);
    }

    public function getAddress(): string
    {
        return $this->getData(self::ADDRESS);
    }
}
