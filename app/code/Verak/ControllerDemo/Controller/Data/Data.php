<?php
declare(strict_types=1);

namespace Verak\ControllerDemo\Controller\Data;

use \Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Json;

class Data extends \Magento\Framework\App\Action\Action implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @inheritDoc
     * https:vera-kuzub.local/dv-campus-demo-data/data/data/first_name/Vera/second_name/Kuzub/url_git_hub/https:\\\\github.com\VeraKuzub\dv_campus_Kuzub
     */
    public function execute()
    {
        /** @var \Magento\Framework\App\Request\HTTP $request */
        $request = $this->getRequest();

        $firstName = $request->getParam('first_name');
        $secondName = $request->getParam('second_name');
        $url = $request->getParam('url_git_hub');

        /** @var Json $response */

        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $response->setData([
            'Full name: ' => $firstName . ' ' . $secondName,
            'Repository URL: ' => $url
        ]);

        return $response;
    }
}
