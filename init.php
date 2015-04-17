<?php defined('SYSPATH') or die('No direct script access.');

Route::set('huia_email', 'huia/email(/<action>(/<id>))')
	->defaults(array(
		'controller' => 'email',
		'action'     => 'index',
		'directory' => 'huia'
	));