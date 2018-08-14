<?php
namespace Omnipay\PayKeeper\Message;

class PurchaseRequest extends \Omnipay\Common\Message\AbstractRequest
{

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

    public function getData()
    {
        $this->validate('sum', 'clientid', 'orderid', 'phone', 'cart');
        $data = [];
        $data['sum'] = $this->getSum();
        $data['clientid'] = $this->getClientId();
        $data['orderid'] = $this->getOrderId();
        $data['phone'] = $this->getPhone();
        $data['cart'] = $this->getCart();

        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}