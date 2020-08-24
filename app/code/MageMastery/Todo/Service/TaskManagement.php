<?php

declare(strict_types=1);

namespace MageMastery\Todo\Service;

use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\TaskManagementInterface;
use MageMastery\Todo\Model\ResourceModel\Task;

use Magento\Framework\Exception\AlreadyExistsException;

class TaskManagement implements TaskManagementInterface
{
    private $resource;

    public function __construct(Task $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param TaskInterface $task
     * @return bool
     * @throws AlreadyExistsException
     */
    public function save(TaskInterface $task): bool
    {
        $this->resource->save($task);
        return true;
    }

    /**
     * @param TaskInterface $task
     * @return bool
     * @throws \Exception
     */
    public function delete(TaskInterface $task): bool
    {
        $this->resource->delete($task);
        return true;
    }
}