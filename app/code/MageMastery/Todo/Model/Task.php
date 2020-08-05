<?php

namespace MageMastery\Todo\Model;

use Magento\Framework\Model\AbstractModel;

use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Api\Data\TaskInterface;
class Task extends AbstractModel implements TaskInterface
{
    protected function _construct()
    {
        $this->_init(TaskResource::class);
    }
}