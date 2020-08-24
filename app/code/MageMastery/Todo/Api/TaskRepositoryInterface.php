<?php

namespace MageMastery\Todo\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;

/**
 * @api
 */
interface TaskRepositoryInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return TaskSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface;

    /**
     * @param int $taskId
     * @return TaskInterface
     */
    public function get(int $taskId): TaskInterface;
}