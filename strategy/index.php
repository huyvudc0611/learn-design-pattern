<?php
class Ticket
{
    private $promoteStrategy;
    private $price;
    private $name;

    public function __construct(IPromoteStrategy $promoteStrategy)
    {
        $this->promoteStrategy = $promoteStrategy;
    }


    /**
     * @return mixed
     */
    public function getPromoteStrategy()
    {
        return $this->promoteStrategy;
    }

    /**
     * @param  mixed  $promoteStrategy
     */
    public function setPromoteStrategy($promoteStrategy)
    {
        $this->promoteStrategy = $promoteStrategy;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param  mixed  $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPromotePrice()
    {
        return $this->promoteStrategy->doDiscount($this->price);
    }

}

interface IPromoteStrategy
{
    public function doDiscount($price);
}

class HalfDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount($price)
    {
        return $price * 0.5;
    }
}


class NoDiscountStrategy implements IPromoteStrategy
{

    public function doDiscount($price)
    {
        return $price;
    }
}


$ticket = new Ticket(new NoDiscountStrategy());

$ticket->setPrice(50);
echo $ticket->getPromotePrice();

echo "<br>";

$ticket->setPromoteStrategy(new HalfDiscountStrategy());
echo $ticket->getPromotePrice();