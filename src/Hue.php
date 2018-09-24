<?php namespace Jacksun101\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;

class Hue extends AbstractProvider
{
    //

    /**
     * Get authorization url to begin OAuth flow
     *
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://api.meethue.com/oauth2/auth';
    }

    /**
     * Get access token url to retrieve token
     *
     * @param array $params
     *
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://api.meethue.com/oauth2/token';
    }

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        // TODO: Implement getResourceOwnerDetailsUrl() method.
    }

    /**
     * Get the default scopes used by this provider.
     *
     * @return array
     */
    protected function getDefaultScopes()
    {
        return [];
    }


    protected function checkResponse(ResponseInterface $response, $data)
    {
        // TODO: Implement checkResponse() method.
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        // TODO: Implement createResourceOwner() method.
    }
}