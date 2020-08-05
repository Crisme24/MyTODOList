<?php

declare(strict_types=1);

namespace MageMastery\Todo\Model;

use Magento\Framework\Model\AbstractModel;

use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Api\Data\TaskInterface;
class Task extends AbstractModel implements TaskInterface
{
    const TASK_ID = 'task_id';
    const STATUS = 'status';
    const LABEL = 'label';

    protected function _construct()
    {
        $this->_init(TaskResource::class);
    }

    public function getTaskId(): int
    {
        return (int) $this->getData(self::TASK_ID);
    }

    public function getStatus(): string
    {
        return $this->getData(self::STATUS);
    }

    public function getLabel(): string
    {
        return $this->getData(self::LABEL);
    }
}