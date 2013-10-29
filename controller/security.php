<?php

class security
{
	public static function gethash()
	{
		return hash ("sha512", (uniqid(mt_rand(), true)));;
	}
	
	public static function generateSalt()
	{
		return hash ("sha512", (uniqid(mt_rand(), true)));
	}
	
	public static function createHash($toHash, $salt)
	{
		return sha1($salt.$hash);
	}
	

}