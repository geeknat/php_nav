<?php

/**
 * Created by PhpStorm.
 * User: geeknat
 * Date: 4/20/17
 * Time: 7:55 AM
 */

class SampleCodeUnit
{

    /**
     * This sample demonstrates how to deal with CodeUnit in
     * Navision
     *
     * Code Units are like functions in Navision which expect to be passed
     * certain parameters.
     *
     * I'll use the following sample information to create this
     * request
     *
     * Let's say I have a code unit called AccountManagement, and the page exposing that web service is
     *
     * http://YOUR_URL/DynamicsNAV90/WS/SOME_VALUE/Page/Codeunit/AccountManagement"
     *
     * The "AccountManagement" part will be our end point and
     * it can have as many functions to it as possible
     *
     * e.g UpdateAccountDetails , DeleteAccount ,ActivateAccount
     * which have different parameters
     *
     * @param $data
     */

    public static function updateAccountDetails($data)
    {
        /**
         * Create a new stdClass with the person details
         */

        $params = new stdClass();
        $params->AccId = $data['account_id'];
        $params->Name = $data['name'];
        $params->Phone_No = $data['phone'];
        $params->E_Mail = $data['email'];

        try {

            $connectionHandler = new ConnectionHandler();

            /**
             * Connect as usual
             *
             * Note that this time , just like "Create" was a function, we call
             * UpdateAccountDetails which is a function in AccountManagement and pass
             * its parameters
             */

            $page = $connectionHandler->prepare_And_Connect('AccountManagement');

            $page->UpdateAccountDetails($params);

            $connectionHandler->restore_HTTP_Wrapper();

        } catch (Exception $exception) {
            die($exception->getMessage());
        }
    }


}