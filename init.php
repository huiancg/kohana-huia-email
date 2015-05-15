<?php defined('SYSPATH') or die('No direct script access.');

// autoload shadowhand-email
Kohana::modules(
  array_merge(Kohana::modules(), array(
    'shadowhand-email' => VENDORPATH.'shadowhand/email'
  ))
);

Route::set('huia_email', 'huia/email(/<action>(/<id>))')
  ->defaults(array(
    'controller' => 'email',
    'action'     => 'index',
    'directory' => 'huia'
  ));