<!--Although API/Data/*.php interfaces become blueprint requirements for our data models, we also have Api/*RepositoryInterface.php files. The idea here is to extract create, update, delete, search, and similar data-handling logic away from the data model class into its own class. This way, our model classes become more pure data and business logic classes while the rest of persistence and search-related logic moves into these repository classes.-->
<!---->
<!--Our Slide Repository Interface is defined within the app/code/Foggyline/Slider/Api/SlideRepositoryInterface.php-->

<?php
namespace Foggyline\Slider\Api;

/**
 * @api
 */
interface SlideRepositoryInterface
{
    /**
     * Retrieve slide entity.
     * @param int $slideId
     * @return \Foggyline\Slider\Api\Data\SlideInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If slide with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($slideId);

    /**
     * Save slide.
     * @param \Foggyline\Slider\Api\Data\SlideInterface $slide
     * @return \Foggyline\Slider\Api\Data\SlideInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Foggyline\Slider\Api\Data\SlideInterface $slide);

    /**
     * Retrieve slides matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\SearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete slide by ID.
     * @param int $slideId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($slideId);
}
