<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instagram_basic_display_api
{
    private $_appId = '1418929993095175';
    private $_appSecret = '7443699d32672c790eca71c06fc9ed44';
    private $_redirectUrl = 'https://www.shyamgroups.co.in/';
    private $_getCode = '';
    private $_apiBaseUrl = 'https://api.instagram.com/';
    private $_graphBaseUrl = 'https://graph.instagram.com/';
    private $_userAccessToken = '';
    private $_userAccessTokenExpires = '';

    public $authorizationUrl = '';
    public $hasUserAccessToken = false;
    public $userId = '31821283454183593';

    public function __construct($params = array())
    {
        // save Instagram code
        $this->_getCode = isset($params['get_code']) ? $params['get_code'] : '';

        // get an access token
        $this->_setUserInstagramAccessToken($params);

        // get authorization URL
        $this->_setAuthorizationUrl();
    }
    
    public function getUserAccessToken()
    {
        return $this->_userAccessToken;
    }

    public function getUserAccessTokenExpires()
    {
        return $this->_userAccessTokenExpires;
    }

    private function _setAuthorizationUrl()
    {
        $getVars = [
            'app_id' => $this->_appId,
            'redirect_uri' => $this->_redirectUrl,
            'scope' => 'user_profile,user_media',
            'response_type' => 'code',
        ];

        // create url
        $this->authorizationUrl = $this->_apiBaseUrl . 'oauth/authorize?' . http_build_query($getVars);
    }

    private function _setUserInstagramAccessToken($params)
    {
        if ($params['access_token']) {
            // we have an access token
            $this->_userAccessToken = $params['access_token'];
            $this->hasUserAccessToken = true;
            $this->userId = $params['user_id'];
        } elseif ($params['get_code']) {
            // try and get an access token
            $userAccessTokenResponse = $this->_getUserAccessToken();
            $this->_userAccessToken = $userAccessTokenResponse['access_token'];
            $this->hasUserAccessToken = true;
            $this->userId = $userAccessTokenResponse['user_id'];

            // get long lived access token
            $longLivedAccessTokenResponse = $this->_getLongLivedUserAccessToken();
            $this->_userAccessToken = $longLivedAccessTokenResponse['access_token'];
            $this->_userAccessTokenExpires = $longLivedAccessTokenResponse['expires_in'];
        }
    }

    private function _getUserAccessToken()
    {
        $params = [
            'endpoint_url' => $this->_apiBaseUrl . 'oauth/access_token',
            'type' => 'POST',
            'url_params' => [
                'app_id' => $this->_appId,
                'app_secret' => $this->_appSecret,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $this->_redirectUrl,
                'code' => $this->_getCode,
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    private function _getLongLivedUserAccessToken()
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . 'access_token',
            'type' => 'GET',
            'url_params' => [
                'client_secret' => $this->_appSecret,
                'grant_type' => 'ig_exchange_token',
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    public function getUser()
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . 'me',
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id,username,account_type',
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    public function getUsersMedia()
    {
        $accessToken = 'IGAAUKgmIzGAdBZAFJ3WnJnWGlpZAGRXWGs4NmZAZAQkdwLWowZADVMR253dDVtSTczTjVqLTRHRHlQTnAzYml2c2dWRGVtay1zZAjhRR0tLT3JKem1Rel9jbFUzY196cWptX2pIV2NRMWk1ZAmVDRGVwQnE1NEdBczNWR1BFaHJ3eDY0WQZDZD';
        $params = [
            'get_code' => isset($_GET['code']) ? $_GET['code'] : '',
            'access_token' => $accessToken,
            'user_id' => '6344800355542723',
        ];
        $ig = new instagram_basic_display_api($params);
        $user = $ig->getUser();
        // print_r($user);
        // exit();
        $count = $user;
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . $this->userId . '/media',
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id,caption,media_type,media_url',
                'limit' => 84,
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    public function getPaging($pagingEndpoint)
    {
        $params = [
            'endpoint_url' => $pagingEndpoint,
            'type' => 'GET',
            'url_params' => [
                'paging' => false,
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    public function getMedia($mediaId)
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . $mediaId,
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username',
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    public function getMediaChildren($mediaId)
    {
        $params = [
            'endpoint_url' => $this->_graphBaseUrl . $mediaId . '/children',
            'type' => 'GET',
            'url_params' => [
                'fields' => 'id,media_type,media_url,permalink,thumbnail_url,timestamp,username',
            ],
        ];

        $response = $this->_makeApiCall($params);
        return $response;
    }

    private function _makeApiCall($params)
    {
        $ch = curl_init();

        $endpoint = $params['endpoint_url'];

        if ('POST' == $params['type']) {
            // post request
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params['url_params']));
            curl_setopt($ch, CURLOPT_POST, 1);
        } elseif ('GET' == $params['type']) {
            // get request
            $params['url_params']['access_token'] = $this->_userAccessToken;

            //add params to endpoint
            $endpoint .= '?' . http_build_query($params['url_params']);
        }

        // general curl options
        curl_setopt($ch, CURLOPT_URL, $endpoint);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $responseArray = json_decode($response, true);

        if (isset($responseArray['error_type'])) {
            var_dump($responseArray);
            die();
        } else {
            return $responseArray;
        }
    }
}
