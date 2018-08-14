<?php
namespace Omnipay\PayKeeper\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

class AuthorizeResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return $this->request->checkSign();
    }

    public function isRedirect()
    {
        return false;
    }

    public function getMessage()
    {
        if ($this->isSuccessful()) {
            return 'OK ' . $this->request->getSecretSign();
        } else {
            return 'Error';
        }
    }

    public function getTransactionReference()
    {
        return $this->data['orderid'];
    }

}