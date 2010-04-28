<?php
$parser = new HttpParser();
class HelloWorldApp
{
    public function call($env)
    {
        return array(
            200,
            array("Content-Type" => "text/plain"),
            array("hello world")
        );
    }
}

require_once 'library/kelpie/kelpie_init.php';
$server = new Kelpie_Server('0.0.0.0', 8000);
$server->start(new HelloWorldApp());
