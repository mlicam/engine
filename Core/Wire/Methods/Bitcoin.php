<?php

namespace Minds\Core\Wire\Methods;

class Bitcoin implements MethodInterface
{

    private $amount;
    private $entity;
    private $id;

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setEntity($entity)
    {
        $this->entity = $entity;
        return $this;
    }

    public function setPayload($payload = [])
    {
        return $this;
    }

    public function execute()
    {
        // TODO: get correct owner_guid depending if entity is user or not
        //$this->id = Helpers\Wallet::createTransations($this->entity->owner_guid, $this->amount, $this->entity->guid, "Wire");
        throw new \Exception('Coming soon');
    }

    public function getId()
    {
        return $this->id;
    }

}
