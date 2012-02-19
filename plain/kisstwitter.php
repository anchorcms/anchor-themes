<?php

/*
 * credit goes to Kieron Wilson (http://kieronwilson.co.uk/)
*/

class KissTwitter {

	private $screen_name;
	
	public static function user($screen_name) {
		return new static($screen_name);
	}

	public function __construct($screen_name) {
		$this->screen_name = $screen_name;
		return $this;
	}

	public function tweets($limit = 10) {
		return $this->request('statuses/user_timeline', array(
			'screen_name' => $this->screen_name,
			'count' => $limit,
			'include_entities' => 'true',
			'include_rts' => 'true'
		));
	}

	public function tweet($id) {
		return $this->request('statuses/show/' . $id);
	}

	private function request($resource, $query = array()) {
		$url = 'http://api.twitter.com/1/' . $resource . '.json';

		if(count($query)) {
			$url .= '?' . http_build_query($query);
		}

		if($response = file_get_contents($url)) {
			return json_decode($response);
		}

		return false;
	}

}