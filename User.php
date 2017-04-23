<?php

class User {
	var $firstName;
	var $lastName;
	var $age;
	var $location;
	var $linkToProfilePicture;
	var $about;

	function __construct($firstName, $lastName, $age, $location, $linkToProfilePicture, $about)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
		$this->location = $location;
		$this->linkToProfilePicture = $linkToProfilePicture;
		$this->about = $about;
	}

	function getFirstName()
	{
		return $this->firstName;
	}

	function getLastName()
	{
		return $this->lastName;
	}

	function getAge()
	{
		return $this->age;
	}

	function getLocation()
	{
		return $this->location;
	}

	function getLinkToProfilePicture()
	{
		return $this->linkToProfilePicture;
	}

	function getAbout()
	{
		return $this->about;
	}
}