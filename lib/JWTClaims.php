<?php
namespace XeroAPI\XeroPHP;

use \Firebase\JWT\JWT;

class JWTClaims
{
	private $idToken;
    private $jwtDecoded;
    private $email;
    private $family_name;
    private $given_name;
    private $username;
    private $session_id;
    private $user_id;
    private $sub​value;
    private $expiration;
    private $auth_time;
    private $iss;
    private $at_hash;
    private $sid;

    private $aud;
    private $iat​;

    public function decode() {
        
        $tks = explode('.', $this->idToken);
        list($headb64, $bodyb64, $cryptob64) = $tks;
        $this->jwtDecoded = JWT::jsonDecode(JWT::urlsafeB64Decode($bodyb64),true);
        
        $this->sub​value = $this->jwtDecoded->{'sub'};
        $this->expiration = $this->jwtDecoded->{'exp'};
        $this->email = $this->jwtDecoded->{'email'};
        $this->family_name = $this->jwtDecoded->{'family_name'};
        $this->given_name = $this->jwtDecoded->{'given_name'};
        $this->username = $this->jwtDecoded->{'preferred_username'};
        $this->session_id = $this->jwtDecoded->{'global_session_id'};
        $this->user_id = $this->jwtDecoded->{'xero_userid'};
        $this->auth_time = $this->jwtDecoded->{'auth_time'};
        $this->iss = $this->jwtDecoded->{'iss'};
        $this->at_hash = $this->jwtDecoded->{'at_hash'};
        $this->sid = $this->jwtDecoded->{'sid'};
        
        // No idea why these values can't be read
        //but appear when dumping jwtDecoded?!?!
        //$this->aud = $this->jwtDecoded->{'aud​'};
        //$this->iat = $this->jwtDecoded->{'iat​'};
        return $this;
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
        return $this->email;
    }

    // The user’s family name
    public function getFamilyName() {
        return $this->family_name;
    }

    // The user’s given name
    public function getGivenName() {
        return $this->given_name;
    }

    // The user’s preferred username
    public function getPreferredUsername() {
        return $this->username;
    }

    // The global session id
    public function getGlobalSessionId() {
        return $this->session_id;
    }

    // The user’s Xero id
    public function getXeroUserId() {
        return $this->user_id;
    }

    // The time of authentication
    public function getAuthTime() {
        return $this->auth_time;
    }

    //The unique identifier for the end user
    public function getSub() {
        return $this->sub​value;
    }

    public function getAudValue() {
        return $this->aud;
    }

    //The expiry time
    public function getExp() {
        return $this->expiration;
    }

    //The issue time
    public function getIat() {
        return $this->iat​;
    }

    //The issuer of the token (i.e. https://identity.xero.com)
    public function getIss() {
        return $this->iss;
    }

    //The at hash
    public function getAtHash() {
        return $this->at_hash;
    }

    //The session id
    public function getSid() {
        return $this->sid;
    }
}
?>