<?php
declare(strict_types=1);

namespace Verak\ControllerDemo\Controller\Data;

use \Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Data extends \Magento\Framework\App\Action\Action implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @inheritDoc
     * https:vera-kuzub.local/dv-campus-demo-data/data/data/first_name/Vera/second_name/Kuzub/url_git_hub/VeraKuzub
     */
    public function execute()
    {
        /** @var Page $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $response;
    }
}
