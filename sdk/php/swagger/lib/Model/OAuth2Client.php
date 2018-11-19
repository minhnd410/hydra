<?php
/**
 * OAuth2Client
 *
 * PHP version 5
 *
 * @category Class
 * @package  HydraSDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HydraSDK\Model;

use \ArrayAccess;

/**
 * OAuth2Client Class Doc Comment
 *
 * @category    Class
 * @package     HydraSDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OAuth2Client implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'oAuth2Client';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed_cors_origins' => 'string[]',
        'audience' => 'string[]',
        'client_id' => 'string',
        'client_name' => 'string',
        'client_secret' => 'string',
        'client_secret_expires_at' => 'int',
        'client_uri' => 'string',
        'contacts' => 'string[]',
        'grant_types' => 'string[]',
        'jwks' => '\HydraSDK\Model\JSONWebKeySet',
        'jwks_uri' => 'string',
        'logo_uri' => 'string',
        'owner' => 'string',
        'policy_uri' => 'string',
        'redirect_uris' => 'string[]',
        'request_object_signing_alg' => 'string',
        'request_uris' => 'string[]',
        'response_types' => 'string[]',
        'scope' => 'string',
        'sector_identifier_uri' => 'string',
        'subject_type' => 'string',
        'token_endpoint_auth_method' => 'string',
        'tos_uri' => 'string',
        'userinfo_signed_response_alg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed_cors_origins' => null,
        'audience' => null,
        'client_id' => null,
        'client_name' => null,
        'client_secret' => null,
        'client_secret_expires_at' => 'int64',
        'client_uri' => null,
        'contacts' => null,
        'grant_types' => null,
        'jwks' => null,
        'jwks_uri' => null,
        'logo_uri' => null,
        'owner' => null,
        'policy_uri' => null,
        'redirect_uris' => null,
        'request_object_signing_alg' => null,
        'request_uris' => null,
        'response_types' => null,
        'scope' => null,
        'sector_identifier_uri' => null,
        'subject_type' => null,
        'token_endpoint_auth_method' => null,
        'tos_uri' => null,
        'userinfo_signed_response_alg' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'allowed_cors_origins' => 'allowed_cors_origins',
        'audience' => 'audience',
        'client_id' => 'client_id',
        'client_name' => 'client_name',
        'client_secret' => 'client_secret',
        'client_secret_expires_at' => 'client_secret_expires_at',
        'client_uri' => 'client_uri',
        'contacts' => 'contacts',
        'grant_types' => 'grant_types',
        'jwks' => 'jwks',
        'jwks_uri' => 'jwks_uri',
        'logo_uri' => 'logo_uri',
        'owner' => 'owner',
        'policy_uri' => 'policy_uri',
        'redirect_uris' => 'redirect_uris',
        'request_object_signing_alg' => 'request_object_signing_alg',
        'request_uris' => 'request_uris',
        'response_types' => 'response_types',
        'scope' => 'scope',
        'sector_identifier_uri' => 'sector_identifier_uri',
        'subject_type' => 'subject_type',
        'token_endpoint_auth_method' => 'token_endpoint_auth_method',
        'tos_uri' => 'tos_uri',
        'userinfo_signed_response_alg' => 'userinfo_signed_response_alg'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allowed_cors_origins' => 'setAllowedCorsOrigins',
        'audience' => 'setAudience',
        'client_id' => 'setClientId',
        'client_name' => 'setClientName',
        'client_secret' => 'setClientSecret',
        'client_secret_expires_at' => 'setClientSecretExpiresAt',
        'client_uri' => 'setClientUri',
        'contacts' => 'setContacts',
        'grant_types' => 'setGrantTypes',
        'jwks' => 'setJwks',
        'jwks_uri' => 'setJwksUri',
        'logo_uri' => 'setLogoUri',
        'owner' => 'setOwner',
        'policy_uri' => 'setPolicyUri',
        'redirect_uris' => 'setRedirectUris',
        'request_object_signing_alg' => 'setRequestObjectSigningAlg',
        'request_uris' => 'setRequestUris',
        'response_types' => 'setResponseTypes',
        'scope' => 'setScope',
        'sector_identifier_uri' => 'setSectorIdentifierUri',
        'subject_type' => 'setSubjectType',
        'token_endpoint_auth_method' => 'setTokenEndpointAuthMethod',
        'tos_uri' => 'setTosUri',
        'userinfo_signed_response_alg' => 'setUserinfoSignedResponseAlg'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allowed_cors_origins' => 'getAllowedCorsOrigins',
        'audience' => 'getAudience',
        'client_id' => 'getClientId',
        'client_name' => 'getClientName',
        'client_secret' => 'getClientSecret',
        'client_secret_expires_at' => 'getClientSecretExpiresAt',
        'client_uri' => 'getClientUri',
        'contacts' => 'getContacts',
        'grant_types' => 'getGrantTypes',
        'jwks' => 'getJwks',
        'jwks_uri' => 'getJwksUri',
        'logo_uri' => 'getLogoUri',
        'owner' => 'getOwner',
        'policy_uri' => 'getPolicyUri',
        'redirect_uris' => 'getRedirectUris',
        'request_object_signing_alg' => 'getRequestObjectSigningAlg',
        'request_uris' => 'getRequestUris',
        'response_types' => 'getResponseTypes',
        'scope' => 'getScope',
        'sector_identifier_uri' => 'getSectorIdentifierUri',
        'subject_type' => 'getSubjectType',
        'token_endpoint_auth_method' => 'getTokenEndpointAuthMethod',
        'tos_uri' => 'getTosUri',
        'userinfo_signed_response_alg' => 'getUserinfoSignedResponseAlg'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allowed_cors_origins'] = isset($data['allowed_cors_origins']) ? $data['allowed_cors_origins'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_name'] = isset($data['client_name']) ? $data['client_name'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['client_secret_expires_at'] = isset($data['client_secret_expires_at']) ? $data['client_secret_expires_at'] : null;
        $this->container['client_uri'] = isset($data['client_uri']) ? $data['client_uri'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['grant_types'] = isset($data['grant_types']) ? $data['grant_types'] : null;
        $this->container['jwks'] = isset($data['jwks']) ? $data['jwks'] : null;
        $this->container['jwks_uri'] = isset($data['jwks_uri']) ? $data['jwks_uri'] : null;
        $this->container['logo_uri'] = isset($data['logo_uri']) ? $data['logo_uri'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['policy_uri'] = isset($data['policy_uri']) ? $data['policy_uri'] : null;
        $this->container['redirect_uris'] = isset($data['redirect_uris']) ? $data['redirect_uris'] : null;
        $this->container['request_object_signing_alg'] = isset($data['request_object_signing_alg']) ? $data['request_object_signing_alg'] : null;
        $this->container['request_uris'] = isset($data['request_uris']) ? $data['request_uris'] : null;
        $this->container['response_types'] = isset($data['response_types']) ? $data['response_types'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sector_identifier_uri'] = isset($data['sector_identifier_uri']) ? $data['sector_identifier_uri'] : null;
        $this->container['subject_type'] = isset($data['subject_type']) ? $data['subject_type'] : null;
        $this->container['token_endpoint_auth_method'] = isset($data['token_endpoint_auth_method']) ? $data['token_endpoint_auth_method'] : null;
        $this->container['tos_uri'] = isset($data['tos_uri']) ? $data['tos_uri'] : null;
        $this->container['userinfo_signed_response_alg'] = isset($data['userinfo_signed_response_alg']) ? $data['userinfo_signed_response_alg'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['scope']) && !preg_match("/([a-zA-Z0-9\\.\\*]+\\s?)+/", $this->container['scope'])) {
            $invalid_properties[] = "invalid value for 'scope', must be conform to the pattern /([a-zA-Z0-9\\.\\*]+\\s?)+/.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (!preg_match("/([a-zA-Z0-9\\.\\*]+\\s?)+/", $this->container['scope'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets allowed_cors_origins
     * @return string[]
     */
    public function getAllowedCorsOrigins()
    {
        return $this->container['allowed_cors_origins'];
    }

    /**
     * Sets allowed_cors_origins
     * @param string[] $allowed_cors_origins AllowedCORSOrigins are one or more URLs (scheme://host[:port]) which are allowed to make CORS requests to the /oauth/token endpoint. If this array is empty, the sever's CORS origin configuration (`CORS_ALLOWED_ORIGINS`) will be used instead. If this array is set, the allowed origins are appended to the server's CORS origin configuration. Be aware that environment variable `CORS_ENABLED` MUST be set to `true` for this to work.
     * @return $this
     */
    public function setAllowedCorsOrigins($allowed_cors_origins)
    {
        $this->container['allowed_cors_origins'] = $allowed_cors_origins;

        return $this;
    }

    /**
     * Gets audience
     * @return string[]
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     * @param string[] $audience Audience is a whitelist defining the audiences this client is allowed to request tokens for. An audience limits the applicability of an OAuth 2.0 Access Token to, for example, certain API endpoints. The value is a list of URLs. URLs MUST NOT contain whitespaces.
     * @return $this
     */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id ClientID  is the id for this client.
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets client_name
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     * @param string $client_name Name is the human-readable string name of the client to be presented to the end-user during authorization.
     * @return $this
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     * @param string $client_secret Secret is the client's secret. The secret will be included in the create request as cleartext, and then never again. The secret is stored using BCrypt so it is impossible to recover it. Tell your users that they need to write the secret down as it will not be made available again.
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets client_secret_expires_at
     * @return int
     */
    public function getClientSecretExpiresAt()
    {
        return $this->container['client_secret_expires_at'];
    }

    /**
     * Sets client_secret_expires_at
     * @param int $client_secret_expires_at SecretExpiresAt is an integer holding the time at which the client secret will expire or 0 if it will not expire. The time is represented as the number of seconds from 1970-01-01T00:00:00Z as measured in UTC until the date/time of expiration.
     * @return $this
     */
    public function setClientSecretExpiresAt($client_secret_expires_at)
    {
        $this->container['client_secret_expires_at'] = $client_secret_expires_at;

        return $this;
    }

    /**
     * Gets client_uri
     * @return string
     */
    public function getClientUri()
    {
        return $this->container['client_uri'];
    }

    /**
     * Sets client_uri
     * @param string $client_uri ClientURI is an URL string of a web page providing information about the client. If present, the server SHOULD display this URL to the end-user in a clickable fashion.
     * @return $this
     */
    public function setClientUri($client_uri)
    {
        $this->container['client_uri'] = $client_uri;

        return $this;
    }

    /**
     * Gets contacts
     * @return string[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     * @param string[] $contacts Contacts is a array of strings representing ways to contact people responsible for this client, typically email addresses.
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets grant_types
     * @return string[]
     */
    public function getGrantTypes()
    {
        return $this->container['grant_types'];
    }

    /**
     * Sets grant_types
     * @param string[] $grant_types GrantTypes is an array of grant types the client is allowed to use.
     * @return $this
     */
    public function setGrantTypes($grant_types)
    {
        $this->container['grant_types'] = $grant_types;

        return $this;
    }

    /**
     * Gets jwks
     * @return \HydraSDK\Model\JSONWebKeySet
     */
    public function getJwks()
    {
        return $this->container['jwks'];
    }

    /**
     * Sets jwks
     * @param \HydraSDK\Model\JSONWebKeySet $jwks
     * @return $this
     */
    public function setJwks($jwks)
    {
        $this->container['jwks'] = $jwks;

        return $this;
    }

    /**
     * Gets jwks_uri
     * @return string
     */
    public function getJwksUri()
    {
        return $this->container['jwks_uri'];
    }

    /**
     * Sets jwks_uri
     * @param string $jwks_uri URL for the Client's JSON Web Key Set [JWK] document. If the Client signs requests to the Server, it contains the signing key(s) the Server uses to validate signatures from the Client. The JWK Set MAY also contain the Client's encryption keys(s), which are used by the Server to encrypt responses to the Client. When both signing and encryption keys are made available, a use (Key Use) parameter value is REQUIRED for all keys in the referenced JWK Set to indicate each key's intended usage. Although some algorithms allow the same key to be used for both signatures and encryption, doing so is NOT RECOMMENDED, as it is less secure. The JWK x5c parameter MAY be used to provide X.509 representations of keys provided. When used, the bare key values MUST still be present and MUST match those in the certificate.
     * @return $this
     */
    public function setJwksUri($jwks_uri)
    {
        $this->container['jwks_uri'] = $jwks_uri;

        return $this;
    }

    /**
     * Gets logo_uri
     * @return string
     */
    public function getLogoUri()
    {
        return $this->container['logo_uri'];
    }

    /**
     * Sets logo_uri
     * @param string $logo_uri LogoURI is an URL string that references a logo for the client.
     * @return $this
     */
    public function setLogoUri($logo_uri)
    {
        $this->container['logo_uri'] = $logo_uri;

        return $this;
    }

    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner Owner is a string identifying the owner of the OAuth 2.0 Client.
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets policy_uri
     * @return string
     */
    public function getPolicyUri()
    {
        return $this->container['policy_uri'];
    }

    /**
     * Sets policy_uri
     * @param string $policy_uri PolicyURI is a URL string that points to a human-readable privacy policy document that describes how the deployment organization collects, uses, retains, and discloses personal data.
     * @return $this
     */
    public function setPolicyUri($policy_uri)
    {
        $this->container['policy_uri'] = $policy_uri;

        return $this;
    }

    /**
     * Gets redirect_uris
     * @return string[]
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     * @param string[] $redirect_uris RedirectURIs is an array of allowed redirect urls for the client, for example http://mydomain/oauth/callback .
     * @return $this
     */
    public function setRedirectUris($redirect_uris)
    {
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets request_object_signing_alg
     * @return string
     */
    public function getRequestObjectSigningAlg()
    {
        return $this->container['request_object_signing_alg'];
    }

    /**
     * Sets request_object_signing_alg
     * @param string $request_object_signing_alg JWS [JWS] alg algorithm [JWA] that MUST be used for signing Request Objects sent to the OP. All Request Objects from this Client MUST be rejected, if not signed with this algorithm.
     * @return $this
     */
    public function setRequestObjectSigningAlg($request_object_signing_alg)
    {
        $this->container['request_object_signing_alg'] = $request_object_signing_alg;

        return $this;
    }

    /**
     * Gets request_uris
     * @return string[]
     */
    public function getRequestUris()
    {
        return $this->container['request_uris'];
    }

    /**
     * Sets request_uris
     * @param string[] $request_uris Array of request_uri values that are pre-registered by the RP for use at the OP. Servers MAY cache the contents of the files referenced by these URIs and not retrieve them at the time they are used in a request. OPs can require that request_uri values used be pre-registered with the require_request_uri_registration discovery parameter.
     * @return $this
     */
    public function setRequestUris($request_uris)
    {
        $this->container['request_uris'] = $request_uris;

        return $this;
    }

    /**
     * Gets response_types
     * @return string[]
     */
    public function getResponseTypes()
    {
        return $this->container['response_types'];
    }

    /**
     * Sets response_types
     * @param string[] $response_types ResponseTypes is an array of the OAuth 2.0 response type strings that the client can use at the authorization endpoint.
     * @return $this
     */
    public function setResponseTypes($response_types)
    {
        $this->container['response_types'] = $response_types;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope Scope is a string containing a space-separated list of scope values (as described in Section 3.3 of OAuth 2.0 [RFC6749]) that the client can use when requesting access tokens.
     * @return $this
     */
    public function setScope($scope)
    {

        if (!is_null($scope) && (!preg_match("/([a-zA-Z0-9\\.\\*]+\\s?)+/", $scope))) {
            throw new \InvalidArgumentException("invalid value for $scope when calling OAuth2Client., must conform to the pattern /([a-zA-Z0-9\\.\\*]+\\s?)+/.");
        }

        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sector_identifier_uri
     * @return string
     */
    public function getSectorIdentifierUri()
    {
        return $this->container['sector_identifier_uri'];
    }

    /**
     * Sets sector_identifier_uri
     * @param string $sector_identifier_uri URL using the https scheme to be used in calculating Pseudonymous Identifiers by the OP. The URL references a file with a single JSON array of redirect_uri values.
     * @return $this
     */
    public function setSectorIdentifierUri($sector_identifier_uri)
    {
        $this->container['sector_identifier_uri'] = $sector_identifier_uri;

        return $this;
    }

    /**
     * Gets subject_type
     * @return string
     */
    public function getSubjectType()
    {
        return $this->container['subject_type'];
    }

    /**
     * Sets subject_type
     * @param string $subject_type SubjectType requested for responses to this Client. The subject_types_supported Discovery parameter contains a list of the supported subject_type values for this server. Valid types include `pairwise` and `public`.
     * @return $this
     */
    public function setSubjectType($subject_type)
    {
        $this->container['subject_type'] = $subject_type;

        return $this;
    }

    /**
     * Gets token_endpoint_auth_method
     * @return string
     */
    public function getTokenEndpointAuthMethod()
    {
        return $this->container['token_endpoint_auth_method'];
    }

    /**
     * Sets token_endpoint_auth_method
     * @param string $token_endpoint_auth_method Requested Client Authentication method for the Token Endpoint. The options are client_secret_post, client_secret_basic, private_key_jwt, and none.
     * @return $this
     */
    public function setTokenEndpointAuthMethod($token_endpoint_auth_method)
    {
        $this->container['token_endpoint_auth_method'] = $token_endpoint_auth_method;

        return $this;
    }

    /**
     * Gets tos_uri
     * @return string
     */
    public function getTosUri()
    {
        return $this->container['tos_uri'];
    }

    /**
     * Sets tos_uri
     * @param string $tos_uri TermsOfServiceURI is a URL string that points to a human-readable terms of service document for the client that describes a contractual relationship between the end-user and the client that the end-user accepts when authorizing the client.
     * @return $this
     */
    public function setTosUri($tos_uri)
    {
        $this->container['tos_uri'] = $tos_uri;

        return $this;
    }

    /**
     * Gets userinfo_signed_response_alg
     * @return string
     */
    public function getUserinfoSignedResponseAlg()
    {
        return $this->container['userinfo_signed_response_alg'];
    }

    /**
     * Sets userinfo_signed_response_alg
     * @param string $userinfo_signed_response_alg JWS alg algorithm [JWA] REQUIRED for signing UserInfo Responses. If this is specified, the response will be JWT [JWT] serialized, and signed using JWS. The default, if omitted, is for the UserInfo Response to return the Claims as a UTF-8 encoded JSON object using the application/json content-type.
     * @return $this
     */
    public function setUserinfoSignedResponseAlg($userinfo_signed_response_alg)
    {
        $this->container['userinfo_signed_response_alg'] = $userinfo_signed_response_alg;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\HydraSDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\HydraSDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


