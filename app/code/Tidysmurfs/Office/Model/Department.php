<?php
namespace Tidysmurfs\Office\Model;

class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this-> _init('Tidysmurfs\Office\Model \ResourceModel\Department');
    }
}

//Creating a simple model
//The Department entity, as per requirements, is modeled as a simple model.
//We previously mentioned that whenever we talk about models, we implicitly think of model class,
// resource class, and collection class forming one unit.
