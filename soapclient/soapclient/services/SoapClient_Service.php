<?php
namespace Craft;

class SoapClientService extends BaseApplicationComponent
{
    
    
    public function connect()
    {
        $client = new \SoapClient("http://prospect.morins.com/ProspectService.asmx?WSDL", array("trace"=>1, "exceptions"=>0));
    }
    
}
?>