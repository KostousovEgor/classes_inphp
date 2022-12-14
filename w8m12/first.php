<?php
class Client
{
    public $first_name;
    public $last_name;

    function hello()
    {
        if ($this->first_name != '' && $this->last_name != '') {
            echo '<br>hello ' . $this->first_name . ' ' . $this->last_name;
        }
    }
}

$client = new Client();
$client->first_name = 'Ivan';
$client->last_name = 'Ivanov';
$client->hello();
