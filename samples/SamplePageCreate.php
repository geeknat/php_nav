<?php

/**
 * Created by PhpStorm.
 * User: geeknat
 * Date: 4/20/17
 * Time: 7:55 AM
 */

require_once '../ClassLoader.php';

class SamplePageCreate
{

    /**
     * This sample demonstrates how to create a data entry (ROW)
     * in Navision .
     *
     * I'll use the following sample information to create this
     * request
     *
     * Let's say I want to insert a persons details , and the page exposing that web service is
     *
     * http://YOUR_URL/DynamicsNAV90/WS/SOME_VALUE/Page/PersonDetails"
     *
     * The "PersonDetails" part will be our end point.
     *
     * This means for us to create a new data entry we have to create a
     *
     * PersonDetails object which will contain all the details for a person
     *
     * @param $data
     */

    public static function insertPersonDetails($data)
    {
        /**
         * Create a new stdClass with the person details
         *
         * Remember to always have a "Key" key as part of the details with a null values
         *
         * This is key when dealing with Navision
         */

        $rowItem = new stdClass();
        $rowItem->Key = null;
        $rowItem->Name = $data['name'];
        $rowItem->Phone_No = $data['phone'];
        $rowItem->E_Mail = $data['email'];

        $tableRow = new stdClass;

        $tableRow->PersonDetails = $rowItem;

        try {

            $connectionHandler = new ConnectionHandler();

            $page = $connectionHandler->prepare_And_Connect('PersonDetails');

            $page->Create($tableRow);

            $connectionHandler->restore_HTTP_Wrapper();

        } catch (Exception $exception) {
            die($exception->getMessage());
        }
    }


}