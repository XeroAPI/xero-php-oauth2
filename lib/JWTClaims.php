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

    // Entire JWT decoded into Object
    public function getJwtDecoded() {
        return $this->jwtDecoded;
    }

    // The user’s email address
    public function getEmail() {
        return $this->jwtDecoded->{'email'};
    }

    // The user’s family name
    public function getFamilyName() {
        return $this->jwtDecoded->{'family_name'};
    }

    // The user’s given name
    public function getGivenName() {
        return $this->jwtDecoded->{'given_name'};
    }

    // The user’s preferred username
    public function getPreferredUsername() {
        return $this->jwtDecoded->{'preferred_username'};
    }

    // The global session id
    public function getGlobalSessionId() {
        return $this->jwtDecoded->{'global_session_id'};
    }

    // The user’s Xero id
    public function getXeroUserId() {
        return $this->jwtDecoded->{'xero_userid'};
    }

    // The time of authentication
    public function getAuthTime() {
        return $this->jwtDecoded->{'auth_time'};
    }

    //The unique identifier for the end user
    public function getSub() {
        return $this->jwtDecoded->{'sub​'};
    }

    //The issuer of the token (i.e. https://identity.xero.com)
    public function getIss() {
        return $this->jwtDecoded->{'iss'};
    }

    //The client_id of your app
    public function getAud() {
        return $this->jwtDecoded->{'aud​'};
    }

    //The expiry time
    public function getExp() {
        return $this->jwtDecoded->{'exp​'};
    }

    //The issue time
    public function getIat() {
        return $this->jwtDecoded->{'iat​'};
    }

    //The issue time
    public function getAtHash() {
        return $this->jwtDecoded->{'at_hash'};
    }

    //The issue time
    public function getSid() {
        return $this->jwtDecoded->{'sid'};
    }
}
?>