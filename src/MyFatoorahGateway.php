<?php

namespace Omnipay\MyFatoorah;

use Omnipay\Common\AbstractGateway;

/**
 * MyFatoorah Gateway
 */
class MyFatoorahGateway extends AbstractGateway
{
    public function getName()
    {
        return 'MyFatoorah';
    }

    public function getDefaultParameters()
    {
        return array(
            'key' => '',
            'testMode' => false,
        );
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }

    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    /**
     * @return Message\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\MyFatoorah\Message\AuthorizeRequest', $parameters);
    }
}
