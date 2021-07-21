<?php
namespace Tidysmurfs\Office\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'Tidysmurfs_office_employee';

    public function _construct()
    {
        $this-> _init('Tidysmurfs\Office \Model \ResourceModel\Employee');
    }
}

//Creating an EAV model
//The Employee entity, as per requirements, is modeled as an EAV model.
