<?php

namespace MageMastery\Todo\Api;

use MageMastery\Todo\Api\Data\TaskListInterface;

/**
 * @api
 */
interface CustomerTaskListInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getList();
}

