<?php
declare(strict_types=1);

namespace Verak\ControllerDemo\Controller\Forward;

use \Magento\Framework\Controller\ResultFactory;
use \Magento\Framework\Controller\Result\Redirect;

class Forward extends \Magento\Framework\App\Action\Action implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @inheritDoc
     * https:vera-kuzub.local/dv-campus-demo-redirect/forward/forward
     */

    public function execute()
    {
        /** @var Redirect $response */
        $response = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $response->setHttpResponseCode(301);

        $url = urlencode('https://github.com/VeraKuzub/dv_campus_Kuzub');

        return $response->setPath(
            'demo_data/data/data',
            [
                '_secure'=>true,
                'first_name'=>'Vera',
                'second_name'=>'Kuzub',
                'url_git_hub'=> $url
            ]
        );
    }
}
