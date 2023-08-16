<?php 
$this->get('/', function (){
    echo 'Main Page';
});

$this->get('/home', function() {
    echo 'Welcome Home';
});

$this->get('/about/test', function() {
    echo 'about test';
});

$this->get('/categoria', 'MyController@method');

?>