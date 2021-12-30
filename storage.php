<?php
class StorageClass
{
	function __construct() {
		if( !isset($_SESSION) ){
      $this->init_session();
    	}
   	}

   	public function init_session(){
    session_start();
	}

    public function getSession() {
    	return $_SESSION['oauth2'];
    }

 	public function startSession($token, $secret, $expires = null)
	{
    session_start();
	}

	public function setToken($token, $expires = null, $tenantId, $refreshToken, $idToken)
	{    
    $_SESSION['oauth2'] = [
      'token' => $token,
      'expires' => $expires,
      'tenant_id' => $tenantId,
      'refresh_token' => $refreshToken,
      'id_token' => $idToken
    ];
	}

	public function getToken()
	{
    //If it doesn't exist or is expired, return null
    if (empty($this->getSession())
      || ($_SESSION['oauth2']['expires'] !== null
      && $_SESSION['oauth2']['expires'] <= time())
    ) {
      return null;
    }
    return $this->getSession();
	}

	public function getAccessToken()
	{
    return $_SESSION['oauth2']['token'];
	}

	public function getRefreshToken()
	{
    return $_SESSION['oauth2']['refresh_token'];
	}

	public function getExpires()
	{
    return $_SESSION['oauth2']['expires'];
	}

	public function getXeroTenantId()
	{
    return $_SESSION['oauth2']['tenant_id'];
	}

	public function getIdToken()
	{
    return $_SESSION['oauth2']['id_token'];
	}

	public function getHasExpired()
	{
		if (!empty($this->getSession())) 
		{
			if(time() > $this->getExpires())
			{
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
}
?>