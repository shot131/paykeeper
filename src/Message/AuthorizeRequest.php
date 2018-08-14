<?php
namespace Omnipay\PayKeeper\Message;

use Omnipay\Common\Exception\InvalidResponseException;

class AuthorizeRequest extends PurchaseRequest
{
    public function getData()
    {
        $this->validate('id', 'sum', 'clientid', 'orderid', 'key', 'secret_seed');
        $data = [];
        $data['id'] = $this->getId();
        $data['sum'] = $this->getSum();
        $data['clientid'] = $this->getClientId();
        $data['orderid'] = $this->getOrderId();
        $data['key'] = $this->getKey();
        $data['secret_seed'] = $this->getSecretSeed();

        return $data;
    }

    public function getSign()
    {
        return md5($this->getId() . sprintf("%.2lf", $this->getSum()) . $this->getClientId() . $this->getOrderId() . $this->getSecretSeed());
    }

    public function getSecretSign()
    {
        return md5($this->getId() . $this->getSecretSeed());
    }

    public function checkSign()
    {
        return ($this->getSign() == $this->getKey());
    }

    public function sendData($data)
    {
        return $this->response = new AuthorizeResponse($this, $data);
    }
}