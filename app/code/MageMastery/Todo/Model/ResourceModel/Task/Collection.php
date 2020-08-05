<?php

namespace MageMastery\Todo\Model\ResourceModel\Task;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;

class Collection extends AbstractCollection implements TaskSearchResultInterface
{
    /**
     * @var SearchCriteriaInterface
     */
    private $searchCriteria;

    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }

    /**
     * Get search criteria
     * 
     * @return SearchCriteriaInterface | null
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * Set search criteria
     * 
     * @param SearchCriteriaInterface $searchCriteria
     * @return Collection
     * @SuppressWarning(PHPMD.UnusedFormalParameter)
     */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    /**
     * Get total count
     * 
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * Set total count
     * 
     * @param int $totalCount
     * @return $this@SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

    /**
     * @param array|null $items
     * @return $this
     * @throws \Exception
     */
    public function setItems(array $items = null)
    {
        if(!$items) {
            return $this;
        }
        foreach ($items as $item) {
            $this->addItem($item);
        }
        return $this;
    }
}