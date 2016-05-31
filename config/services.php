<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],
	'facebook' => [
    'client_id' => '991938884187032',
    'client_secret' => '5ff7ac06291dd2534460f4aaf22bd432',
    'redirect' => 'http://localhost/mixco/social/callback/facebook',
	],

	'google' => [
    'client_id' => '982232916923-c7qaaud7j577muf0pdles65ihvtet1n8.apps.googleusercontent.com',
    'client_secret' => 'OQ9pTb97OXWhSMgXE3OymlN0',
    'redirect' => 'http://localhost/mixco/social/callback/google',
	],

	// 'twitter' => [
 //    'client_id' => '982232916923-c7qaaud7j577muf0pdles65ihvtet1n8.apps.googleusercontent.com',
 //    'client_secret' => 'OQ9pTb97OXWhSMgXE3OymlN0',
 //    'redirect' => 'http://localhost/mixco/social/callback/twitter',
	// ],
];
