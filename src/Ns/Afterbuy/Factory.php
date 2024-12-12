<?php

namespace Ns\Afterbuy;

use Ns\Afterbuy\Client\Request;

/**
 * Class Factory
 */
class Factory
{
    /**
     * @param array $config
     * @return Request
     */
    public function createRequest(array $config)
    {
        $request =  new Request(
            $config['userId'],
            $config['userPass'],
            $config['partnerId'],
            $config['partnerPass'],
            $config['errorLang'],
            $config['doctypeWhitelist'] ?? null
        );
		return $request;
//        return $request->setLogger(new Logger('afterbuy'));
    }
}
