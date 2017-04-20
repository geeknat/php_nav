<?php

class ConnectionHandler
{

    function __construct()
    {

    }

    public function prepare_And_Connect($endPoint, $isPage = true)
    {
        // we unregister the current HTTP wrapper
        stream_wrapper_unregister('http');
        //we register the new HTTP wrapper
        stream_wrapper_register('http', 'NTLMStream') or die("Failed to register protocol");

        //create a new instance of the client with the url

        $soapclient = new NTLMSoapClient($isPage ? Config::NAVISION_PAGE_BASE_URL . $endPoint : Config::NAVISION_CODEUNIT_BASE_URL . $endPoint);

        //return the page
        return $soapclient;
    }

    public function restore_HTTP_Wrapper()
    {
        // restore the original http protocol
        stream_wrapper_restore('http');
    }


}

?>