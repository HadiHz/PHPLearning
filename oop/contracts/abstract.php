<?php
abstract class onlinGateway{
    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '1235489',
                'username' => 'sdsd1f65',
                'password' => '9sdf2919'
            ),
            'saman' => array(
                'api_key' => 'sdfasdfdsv1s5dv6s516ds65'
            ),
            'parsian' => array(
                'username' => 'onasd332',
                'password' => 'as231sv5s1'
            )

        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();


}


class Mellat extends onlinGateway{

    private $gatewayName ;

    private $mellat_options;

    public function __construct()
    {
        $this->gatewayName = "mellat";
        parent::__construct();
        $this->mellat_options = $this->options[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}


$mellat = new Mellat();

$mellat->sendRequest();


class Factory{
    public static function make($class){
        $className = ucfirst($class);
        if(!class_exists($className)){
            return false;

        }

        return new $className;
    }
}

$gateway = Factory::make("mellat");
$gateway->sendRequest();