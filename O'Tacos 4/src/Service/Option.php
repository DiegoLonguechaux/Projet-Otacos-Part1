<?php

namespace App\Service;

class Option{
    private $title;
    private $image;
    private $price;
    private $option;
    private $priceoption;


    public function __construct($title, $image, $price, $option,  $priceoption) {

        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->option = $option;
        $this->priceoption = $priceoption;
    }



    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getTitle():string
    {
        return $this->title;
    }

    public function getImage():? string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage( ? string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(): ? float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice( ? float $price)
    {
        $this->price = $price;

        return $this;
    }

     /**
     * Get the value of option
     */ 
    public function getOption(): ? string
    {
        return $this->option;
    }

    /**
     * Set the value of option
     *
     * @return  self
     */ 
    public function setOption( ? string $option)
    {
        $this->option = $option;

        return $this;
    }



    /**
     * Get the value of priceoption
     */ 
    public function getPriceoption(): ? float
    {
        return $this->priceoption;
    }

    /**
     * Set the value of priceoption
     *
     * @return  self
     */ 
    public function setPriceoption( ? float $priceoption)
    {
        $this->priceoption = $priceoption;

        return $this;
    }


}





