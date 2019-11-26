<?php
declare(strict_types=1);

namespace Verak\ControllerDemo\Block\Info\View;

/**
 * Class InfoForRedirect
 *
 * @package Verak\ControllerDemo\Block\Info\View
 */
class InfoForRedirect extends \Magento\Framework\View\Element\Template
{
    /**
     * @param string $input
     *
     * @return string
     */
    protected function base64cleanDecode(string $input): string
    {
        return strtr(base64_decode($input), ['-'=>'/']);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->getRequest()->getParam('first_name');
    }

    /**
     * @return string
     */
    public function getSecondName(): string
    {
        return $this->getRequest()->getParam('second_name');
    }

    /**
     * @return string
     */
    public function getUrlParam(): string
    {
        $url = $this->getRequest()->getParam('url_git_hub');
        return $this->base64cleanDecode($url);
    }
}
