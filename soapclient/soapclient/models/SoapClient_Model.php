<?php
namespace Craft;

class SoapClientModel extends BaseElementModel
{
    	protected function defineAttributes()
	{
		return array(
                    'wsdl' => AttributeType::String
                );
	}
}
?>