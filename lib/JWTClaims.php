<?php
namespace XeroAPI\XeroPHP;

use \Firebase\JWT\JWT;

class JWTClaims
{
	private $idToken;
	private $jwtDecoded;

	public function __construct($param = null) 
	{
        $this->idToken = $param;
    }

    public function decode() {
        $tks = explode('.', $this->idToken);
        list($headb64, $bodyb64, $cryptob64) = $tks;
        $this->jwtDecoded = JWT::jsonDecode(JWT::urlsafeB64Decode($bodyb64));

        return $this->jwtDecoded;
    }

    public function setTokenId($param = null) {
        $this->idToken = $param;
    }

    public function getJwtDecoded() {
        return $this->jwtDecoded;
    }

    public function getEmail() {
        return $this->jwtDecoded->{'email'};
    }

    public function getFamilyName() {
        return $this->jwtDecoded->{'family_name'};
    }

    public function getGivenName() {
        return $this->jwtDecoded->{'given_name'};
    }

    public function getPreferredUsername() {
        return $this->jwtDecoded->{'preferred_username'};
    }

    public function getGlobalSessionId() {
        return $this->jwtDecoded->{'global_session_id'};
    }

    public function getXeroUserId() {
        return $this->jwtDecoded->{'xero_userid'};
    }

    public function getAuthTime() {
        return $this->jwtDecoded->{'auth_time'};
    }
}
?>