<?php
namespace Task6\Rps\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Task6\Rps\Api\RpsEntityRepositoryInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected Context $context;
    protected JsonFactory $JsonFactory;
    protected RpsEntityRepositoryInterface $rpsEntityRepositoryInterface;
    private RpsEntityRepositoryInterface $RpsEntityRepositoryInterface;

    public function __construct(
        Context $context,
        JsonFactory $JsonFactory,
        RpsEntityRepositoryInterface $rpsEntityRepositoryInterface
    ) {
        $this->RpsEntityRepositoryInterface = $rpsEntityRepositoryInterface;
        $this->JsonFactory = $JsonFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $json = $this->JsonFactory->create();
        $data =  $this->RpsEntityRepositoryInterface->getById(1);
        $ww = ['firstname'=>$data->getFirstname(),'lastname'=>$data->getLastName(), 'email'=>$data->getEmail(), 'address'=>$data->getAddress()];

        return $json->setData($ww);
    }
}
