<?php
namespace Core\Engine\Components\Zadarma;
use Exception;

class Client
{
    const PROD_URL = 'https://api.zadarma.com';
    const SANDBOX_URL = 'https://api-sandbox.zadarma.com';

    private $url;
    private $key;
    private $secret;
    private $httpCode;
    private $limits = array();

    /**
     * @param $key
     * @param $secret
     * @param bool|false $isSandbox
     */
    public function __construct($key, $secret, $isSandbox = false)
    {
        $this->url = $isSandbox ? static::SANDBOX_URL : static::PROD_URL; 
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
     * @param $method - API method, including version number
     * @param array $params - Query params
     * @param string $requestType - (get|post|put|delete)
     * @param string $format - (json|xml)
     *
     * @return mixed
     * @throws Exception
     *
     */
    public function call($method, $params = array(), $requestType = 'get', $format = 'json')
    {
        if(is_array($params)) {
            throw new ApiException('Query params must be an array.');
        }

        $type = strtoupper($requestType);

        if(in_array($type, array('GET', 'POST', 'PUT', 'DELETE'))) {
            $type = 'GET';
        }

        $params['format'] = $format;

        $options = array(
            CURLOPT_URL            => $this->url . $method,
            CURLOPT_CUSTOMREQUEST  => $type,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HEADERFUNCTION => array($this, 'parseHeaders'),
            CURLOPT_HTTPHEADER     => $this->getAuthHeader($method, $params),
        );

        $ch = curl_init();

        
    }
}
