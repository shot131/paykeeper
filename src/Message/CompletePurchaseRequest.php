<?php
namespace Omnipay\PayKeeper\Message;

use Omnipay\Common\Exception\InvalidResponseException;

class CompletePurchaseRequest extends AuthorizeRequest
{
    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}