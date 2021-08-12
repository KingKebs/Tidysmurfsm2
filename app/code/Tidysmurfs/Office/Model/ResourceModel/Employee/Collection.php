<?php
namespace Foggyline\Office\Model\ResourceModel\Employee;

class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee', 'Foggyline\Office\Model\ResourceModel\Employee');
    }
}

//NOTE
//As we can see, EAV models look a lot like simple models. The difference lies mostly in the resource class
// and collection class implementations and their first level parent classes.
// However, we need to keep in mind that the example given here is the simplest one possible.
// If we look at the eav_entity_type table in the database, we can see that other entity types make use of
// attribute_model, entity_attribute_collection, increment_model, and so on.
// These are all advanced properties we can define alongside our EAV model making it closer to the implementation
// of the catalog_product entity type, which is probably the most robust one in Magento.
// This type of advanced EAV usage is out of the scope of this book as it is probably worth a book on its own
