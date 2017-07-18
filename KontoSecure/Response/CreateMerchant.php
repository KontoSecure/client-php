<?php

namespace KontoSecure\Response;

/**
 * Class CreateMerchant
 * @package KontoSecure\Response
 */
class CreateMerchant extends BaseResponse
{
    /**
     * Gets the api key.
     *
     * @return string|null
     */
    public function getApiKey()
    {
        $keys = $this->getVal('api_keys');
        
        if(empty($keys)) {
            return null;
        }
        
        foreach($keys as $key) {
            if($key['state'] === 'active') {
                return $key['hash'];
            }
        }

        return null;
    }
}
