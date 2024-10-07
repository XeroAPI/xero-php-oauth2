<?php
/**
 * Configuration
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP;

/**
 * Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.xero.com/finance.xro/1.0';

    /**
     * The hostFinance
     *
     * @var string
     */
    protected $hostFinance = 'https://api.xero.com/finance.xro/1.0';

    /**
     * The hostAppStore
     *
     * @var string
     */
    protected $hostAppStore = 'https://api.xero.com/appstore/2.0';

    /**
     * The hostAccounting
     *
     * @var string
     */
    protected $hostAccounting = 'https://api.xero.com/api.xro/2.0';

    /**
     * The hostAsset
     *
     * @var string
     */
    protected $hostAsset = 'https://api.xero.com/assets.xro/1.0';

    /**
     * The hostIdentity
     *
     * @var string
     */
    protected $hostIdentity = 'https://api.xero.com';

    /**
     * The hostProject
     *
     * @var string
     */
    protected $hostProject = 'https://api.xero.com/projects.xro/2.0';

    /**
     * The hostPayrollAu
     *
     * @var string
     */
    protected $hostPayrollAu = 'https://api.xero.com/payroll.xro/1.0';

    /**
     * The hostPayrollUk
     *
     * @var string
     */
    protected $hostPayrollUk = 'https://api.xero.com/payroll.xro/2.0';

    /**
     * The hostPayrollNz
     *
     * @var string
     */
    protected $hostPayrollNz = 'https://api.xero.com/payroll.xro/2.0';

    /**
     * The hostFile
     *
     * @var string
     */
    protected $hostFile = 'https://api.xero.com/files.xro/1.0';
    
    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = '[xero-php-oauth2 (7.2.0)]';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Gets the hostFinance
     *
     * @return string hostFinance
     */
    public function getHostFinance()
    {
        return $this->hostFinance;
    }

    /**
     * Sets the hostFinance
     *
     * @param string $hostFinance
     *
     * @return $this
     */
    public function setHostFinance($hostFinance)
    {
        $this->hostFinance = $hostFinance;
        return $this;
    }

    /**
     * Sets the hostAppStore
     *
     * @param string $hostAppStore
     *
     * @return $this
     */
    public function setHostAppStore($hostAppStore)
    {
        $this->hostAppStore = $hostAppStore;
        return $this;
    }

    /**
     * Gets the hostAppStore
     *
     * @return string hostAppStore
     */
    public function getHostAppStore()
    {
        return $this->hostAppStore;
    }

    /**
     * Sets the hostAccounting
     *
     * @param string $hostAccounting
     *
     * @return $this
     */
    public function setHostAccounting($hostAccounting)
    {
        $this->hostAccounting = $hostAccounting;
        return $this;
    }

    /**
     * Gets the hostAccounting
     *
     * @return string hostAccounting
     */
    public function getHostAccounting()
    {
        return $this->hostAccounting;
    }

    /**
     * Sets the hostAsset
     *
     * @param string $hostAsset
     *
     * @return $this
     */
    public function setHostAsset($hostAsset)
    {
        $this->hostAsset = $hostAsset;
        return $this;
    }

    /**
     * Gets the hostAsset
     *
     * @return string hostAsset
     */
    public function getHostAsset()
    {
        return $this->hostAsset;
    }

    /**
     * Sets the hostIdentity
     *
     * @param string $hostIdentity
     *
     * @return $this
     */
    public function setHostIdentity($hostIdentity)
    {
        $this->hostIdentity = $hostIdentity;
        return $this;
    }

    /**
     * Gets the hostIdentity
     *
     * @return string hostIdentity
     */
    public function getHostIdentity()
    {
        return $this->hostIdentity;
    }

    /**
     * Sets the hostProject
     *
     * @param string $hostProject
     *
     * @return $this
     */
    public function setHostProject($hostProject)
    {
        $this->hostProject = $hostProject;
        return $this;
    }

    /**
     * Gets the hostProject
     *
     * @return string hostProject
     */
    public function getHostProject()
    {
        return $this->hostProject;
    }

    /**
     * Sets the hostPayrollAu
     *
     * @param string $hostPayrollAu
     *
     * @return $this
     */
    public function setHostPayrollAu($hostPayrollAu)
    {
        $this->hostPayrollAu = $hostPayrollAu;
        return $this;
    }

    /**
     * Gets the hostPayrollAu
     *
     * @return string hostPayrollAu
     */
    public function getHostPayrollAu()
    {
        return $this->hostPayrollAu;
    }

    /**
     * Sets the hostPayrollUk
     *
     * @param string $hostPayrollUk
     *
     * @return $this
     */
    public function setHostPayrollUk($hostPayrollUk)
    {
        $this->hostPayrollUk = $hostPayrollUk;
        return $this;
    }

    /**
     * Gets the hostPayrollUk
     *
     * @return string hostPayrollUk
     */
    public function getHostPayrollUk()
    {
        return $this->hostPayrollUk;
    }

    /**
     * Sets the hostPayrollNz
     *
     * @param string $hostPayrollNz
     *
     * @return $this
     */
    public function setHostPayrollNz($hostPayrollNz)
    {
        $this->hostPayrollNz = $hostPayrollNz;
        return $this;
    }

    /**
     * Gets the hostPayrollNz
     *
     * @return string hostPayrollNz
     */
    public function getHostPayrollNz()
    {
        return $this->hostPayrollNz;
    }


    /**
     * Sets the hostFile
     *
     * @param string $hostFile
     *
     * @return $this
     */
    public function setHostFile($hostFile)
    {
        $this->hostFile = $hostFile;
        return $this;
    }

    /**
     * Gets the hostFile
     *
     * @return string hostFile
     */
    public function getHostFile()
    {
        return $this->hostFile;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (XeroAPI\XeroPHP) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: 6.3.0' . PHP_EOL;
        $report .= '    SDK Package Version: 7.3.0-alpha' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}
