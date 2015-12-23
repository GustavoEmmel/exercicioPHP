<?php

class User {
	
	public function isLogged() {
		return $this->isLoggedSession() || $this->isLoggedCookie();
	}
	
	private function isLoggedSession() {
		$session = new ArrayObject($_SESSION);
		return $session->offsetExists("loggedin") && $session->offsetGet("loggedin");
	}
	
	private function isLoggedCookie() {
		$cookie = new ArrayObject($_COOKIE);
		return $cookie->offsetExists("Loggedin") && $cookie->offsetGet("Loggedin");
	}
	
}
