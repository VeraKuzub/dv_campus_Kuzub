<?php
declare(strict_types=1);

namespace Verak\ControllerDemo\Controller\Redirect;

use \Magento\Framework\Controller\ResultFactory;
use \Magento\Framework\Controller\Result\Redirect;

class RedirectDemo extends \Magento\Framework\App\Action\Action implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @inheritDoc
     * https:vera-kuzub.local/dv-campus-demo-redirect/redirect/redirectDemo
     * TODO  url_git_hub => https://github.com/VeraKuzub/dv_campus_Kuzub
     */

    public function execute()
    {
        /** @var Redirect $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $response->setHttpResponseCode(301);

        return $response->setPath(
            'demo_data/data/data',
            [
                '_secure'=>true,
                'first_name'=>'Vera',
                'second_name'=>'Kuzub',
                'url_git_hub'=>'github.com'
            ]
        );
    }
}
