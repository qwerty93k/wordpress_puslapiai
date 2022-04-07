<?php

namespace Paysera\DeliveryApi\MerchantClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Result;

class OrderPriceCollection extends Result
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return OrderPrice[]
     */
    public function getList()
    {
        $items = $this->getByReference('list');
        if ($items === null) {
            return [];
        }

        $list = [];
        foreach($items as &$item) {
            $list[] = (new OrderPrice())->setDataByReference($item);
        }

        return $list;
    }
    /**
     * @param OrderPrice[] $list
     * @return $this
     */
    public function setList(array $list)
    {
        $data = [];
        foreach($list as $item) {
            $data[] = $item->getDataByReference();
        }
        $this->setByReference('list', $data);
        return $this;
    }
}
