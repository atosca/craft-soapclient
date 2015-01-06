<?php
namespace Craft;

class SoapClientPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Soap Client');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Angela Tosca';
    }

    function getDeveloperUrl()
    {
        return 'http://atosca.github.io';
    }
}
?>
