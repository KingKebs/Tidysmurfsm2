<!--At this point, we still do not have any of those interfaces or model classes actually created. When creating APIs, we should first start by defining interfaces, and then our models should extend from those interfaces.-->

<!--Interface Foggyline\Slider\Api\Data\SlideInterface is defined within the app/code/Foggyline/Slider/Api/Data/SlideInterface.php file (partial) as follows:-->
<?php
namespace Foggyline\Slider\Api\Data;

/**
 * @api
 */
interface SlideInterface
{
    const PROPERTY_ID = 'slide_id';
    const PROPERTY_SLIDE_ID = 'slide_id';
    const PROPERTY_TITLE = 'title';

    /**
     * Get Slide entity 'slide_id' property value
     * @return int|null
     */
    public function getId();

    /**
     * Set Slide entity 'slide_id' property value
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get Slide entity 'slide_id' property value
     * @return int|null
     */
    public function getSlideId();

    /**
     * Set Slide entity 'slide_id' property value
     * @param int $slideId
     * @return $this
     */
    public function setSlideId($slideId);

    /**
     * Get Slide entity 'title' property value
     * @return string|null
     */
    public function getTitle();

    /**
     * Set Slide entity 'title' property value
     * @param string $title
     * @return $this
     */
    public function setTitle($title);
}
