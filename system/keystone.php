<?php
define("HTTP", "http://");
define("HTTPS", "https://");

class Keystone {
	private $host;
	private $port='35357';
	private $ver='v2.0';
	private $url;

	function __construct($host,$https=false) {
		$this->host = $host;
		
		if($https!=true) {
			$url = HTTP.$host;
		} else {
			$url = HTTPS.$host;
		}
		$this->url=$url;
	}

	public function set_port($port) {
		$this->port=$port;
	}

	public function get_port() {
		return $this->port;
	}

	public function get_version() {
		return $this->ver;
	}

	public function get_host() {
		return $this->host;
	}

	public function get_url_api() {
		return $this->url.':'.$this->port.'/'.$this->ver;
	}

	/* Function related to API versions */
	public function get_api($list=false) {
		if($list == false) {
			$url = $this->url.':'.$this->port.'/';
		} else {
			$url = $this->get_url_api();
		}
	}
	/* End of API versions */
}