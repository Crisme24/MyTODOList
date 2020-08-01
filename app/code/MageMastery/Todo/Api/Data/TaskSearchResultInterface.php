<?php

declare(strict_types=1);

namespace MageMastery\Todo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
*@api 
*/
interface TaskSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getItems();

    /**
     * @params TaskInterface[] $items
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}