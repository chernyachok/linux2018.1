<?php

include_once "insta_settings.php";

$Instagram = new InstaApi($set);

class InstaApi {
	public $clientId  = "";
	public $clientSecret = "";
	public $redirectUri = "";
	public function __construct($settings = array()){
		$this -> clientId = $settings['clientId'];
		$this -> clientSecret = $settings['clientSecret'];
		$this -> redirectUri = $settings['redirectUri'];

	}

		/*public function getAccessTokenAndUserDetails(){
			$postFields = array(
				"client_id" => $this-> clientId,
				"client_secret" =>$this-> clientSecret,
				"grant_type" => "authorization_code",
				"redirect_uri"=>$this->redirectUri,
				"code" => $code
				);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.instagram.com/oauth/access_token
");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
			$response = curl_exec($ch);
			curl_close($ch);

			return json_decode($response,true);


		}
*/
		public function getLoginURL(){
		return "https://api.instagram.com/oauth/authorize/?client_id=".$this->clientId."&redirect_uri=".$this->redirectUri."&response_type=code";
		}
}