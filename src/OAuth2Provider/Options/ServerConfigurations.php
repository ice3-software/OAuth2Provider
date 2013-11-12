<?php
namespace OAuth2Provider\Options;

use OAuth2\ClientAssertionType\ClientAssertionTypeInterface;
use OAuth2\ScopeInterface;
use OAuth2\TokenType\TokenTypeInterface;

use Zend\Stdlib\AbstractOptions;

class ServerConfigurations extends AbstractOptions
{
    /**
     * Storages available for mapping for this server
     *
     * @var array;
     */
    protected $storages = array();

    /**
     * Configurations to pass to the server
     *
     * List of default configurations:
     *
     *   'access_lifetime'            => 3600,
     *   'www_realm'                  => 'Service',
     *   'token_param_name'           => 'access_token',
     *   'token_bearer_header_name'   => 'Bearer',
     *   'enforce_state'              => true,
     *   'require_exact_redirect_uri' => true,
     *   'allow_implicit'             => false,
     *   'allow_credentials_in_request_body' => true,
     *
     * Optional
     *
     * @var array
     */
    protected $configs = array();

    /**
     * Grant types to pass to the server
     * Optional
     * @var array;
     */
    protected $grantTypes = array();

    /**
     * Response type to pass to the server
     * Optional
     *
     * @var array;
     */
    protected $responseTypes = array();

    /**
     * Token type to pass to the server
     * Optional
     *
     * @var array;
     */
    protected $tokenType;

    /**
     * Scope Utilitity to pass to the server
     * Optional
     *
     * @var array;
     */
    protected $scopeUtil;

    /**
     * Assertion type to pass to the server
     * Optional
     *
     * @var ClientAssertionTypeInterface;
     */
    protected $clientAssertionType;

    /**
     * @var string;
     */
    protected $serverClass = 'OAuth2\Server';


	/**
     * @return the $config
     */
    public function getConfigs()
    {
        return $this->configs;
    }

	/**
     * @param multitype: $config
     */
    public function setConfigs(array $configs)
    {
        $this->configs = $configs;
        return $this;
    }

	/**
     * @return the $storage
     */
    public function getStorages()
    {
        return $this->storages;
    }

	/**
     * @param multitype: $storage
     */
    public function setStorages(array $storages)
    {
        $this->storages = $storages;
        return $this;
    }

	/**
     * @return the $grantTypes
     */
    public function getGrantTypes()
    {
        return $this->grantTypes;
    }

	/**
     * @param multitype: $grantTypes
     */
    public function setGrantTypes(array $grantTypes)
    {
        $this->grantTypes = $grantTypes;
        return $this;
    }

	/**
     * @return the $responseTypes
     */
    public function getResponseTypes()
    {
        return $this->responseTypes;
    }

	/**
     * @param multitype: $responseTypes
     */
    public function setResponseTypes(array $responseTypes)
    {
        $this->responseTypes = $responseTypes;
        return $this;
    }

	/**
     * @return the $tokeType
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

	/**
     * @param field_type $tokeType
     */
    public function setTokenType(TokenTypeInterface $tokeType)
    {
        $this->tokenType = $tokeType;
        return $this;
    }

	/**
     * @return the $scopeUtil
     */
    public function getScopeUtil()
    {
        return $this->scopeUtil;
    }

	/**
     * @param field_type $scopeUtil
     */
    public function setScopeUtil(ScopeInterface $scopeUtil)
    {
        $this->scopeUtil = $scopeUtil;
        return $this;
    }

	/**
     * @return the $clientAssertionType
     */
    public function getClientAssertionType()
    {
        return $this->clientAssertionType;
    }

	/**
     * @param field_type $clientAssertionType
     */
    public function setClientAssertionType(ClientAssertionTypeInterface $clientAssertionType)
    {
        $this->clientAssertionType = $clientAssertionType;
    }

	/**
     * @return the $server
     */
    public function getServerClass()
    {
        return $this->serverClass;
    }

	/**
     * @param string $server
     */
    public function setServerClass($server)
    {
        $this->serverClass = $server;
    }
}
