<?php

declare(strict_types=1);

namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

use MageMastery\Todo\Model\Task;
use MageMastery\Todo\Model\TaskFactory;
use MageMastery\Todo\Model\ResourceModel\Task as TaskResource;
use MageMastery\Todo\Service\TaskRepository;

class Index extends Action
{
    private $taskResource;

    private $taskFactory;

    /**
     * @var TaskRepository
     */
    private $taskRepository;

    private $searchCriteriaBuilder;

    public function __construct(
        Context $context, 
        TaskFactory $taskFactory, 
        TaskResource $taskResource,
        TaskRepository $taskRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
        )
    {
        $this->taskFactory = $taskFactory;
        $this->taskResource = $taskResource;
        $this->taskRepository = $taskRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;

        parent::__construct($context);

    }

    public function execute()
    {
        //$task = $this->taskRepository->get(1);

        var_dump($this->taskRepository->getList($this->searchCriteriaBuilder->create())->getItems());
        return;

        // $task = $this->taskFactory->create();

        // $task->setData([
        //     'label' => 'New Task 22',
        //     'status' => 'open',
        //     'customer_id' => 1
        // ]);

        // $this->taskResource->save($task); //taskResource gguarda en la tabla

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
