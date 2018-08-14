<?php
namespace Omnipay\PayKeeper;

use Omnipay\Common\AbstractGateway;

/**
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface refund(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'PayKeeper';
    }

    public function getDefaultParameters()
    {
        return [
            'demoUrl' => '',
            'liveUrl' => '',
            'clientid'  => '',
            'sum'  => '',
            'orderid'  => '',
            'phone'  => '',
            'key'  => '',
            'id'  => '',
            'secret_seed'  => '',
            'cart' => '',
        ];
    }

    public function getDemoUrl()
    {
        return $this->getParameter('demoUrl');
    }

    public function setDemoUrl($value)
    {
        return $this->setParameter('demoUrl', $value);
    }

    public function getLiveUrl()
    {
        return $this->getParameter('liveUrl');
    }

    public function setLiveUrl($value)
    {
        return $this->setParameter('liveUrl', $value);
    }

    public function getClientId()
    {
        return $this->getParameter('clientid');
    }

    public function setClientId($value)
    {
        return $this->setParameter('clientid', $value);
    }

    public function getSum()
    {
        return $this->getParameter('sum');
    }

    public function setSum($value)
    {
        return $this->setParameter('sum', $value);
    }

    public function getOrderId()
    {
        return $this->getParameter('orderid');
    }

    public function setOrderId($value)
    {
        return $this->setParameter('orderid', $value);
    }

    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }

    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    public function getId()
    {
        return $this->getParameter('id');
    }

    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    public function getSecretSeed()
    {
        return $this->getParameter('secret_seed');
    }

    public function setSecretSeed($value)
    {
        return $this->setParameter('secret_seed', $value);
    }

    public function getCart()
    {
        return $this->getParameter('cart');
    }

    public function setCart($value)
    {
        return $this->setParameter('cart', $value);
    }

    public function authorize(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\PayKeeper\Message\AuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\PayKeeper\Message\PurchaseRequest', $parameters);
    }
    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\PayKeeper\Message\CompletePurchaseRequest', $parameters);
    }
}