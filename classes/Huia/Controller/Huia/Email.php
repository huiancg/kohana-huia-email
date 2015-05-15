<?php defined('SYSPATH') OR die('No direct script access.');

class Huia_Controller_Huia_Email extends Controller {
  
  public function action_index()
  {
    $config = Kohana::$config->load('huia/email');
    
    $values = Arr::map('strip_tags', $this->request->post());

    $view = View::factory('huia/email/'.$values['view']);
    $view->set($values);

    $result = Email::factory($values['subject'], $view->render(), 'text/html')
                    ->to($values['to_email'])
                    ->from($config->from_email, $config->from_name)
                    ->send();

    $this->response->body(@json_encode(array('success' => $result)));   
  }
  
}
