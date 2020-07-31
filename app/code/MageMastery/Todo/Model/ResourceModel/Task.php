<?php

namespace MageMastery\Todo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDB;

class Task extends AbstractDB
{
    protected function _construct()
    {
        //TODO: Implement _construct() method.
        $this->_init('magemastery_todo_task', 'task_id');
    }
}