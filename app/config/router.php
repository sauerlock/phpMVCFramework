<?php 

$this->get('/', 'PagesController@home');
$this->get('/categoria', 'PagesController@categoria');
$this->get('/aboutUs', 'PagesController@aboutUs');
$this->get('/contato', 'PagesController@contato');

?>