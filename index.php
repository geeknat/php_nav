<?php

require_once 'ClassLoader.php';

const REQUEST_SAMPLE_CREATE_PAGE = "page_create";
const REQUEST_HANDLE_CODEUNIT = "codeunit";

$requestToProcess = isset($_GET['request']) ? $_GET['request'] : null;

switch ($requestToProcess) {

    case REQUEST_SAMPLE_CREATE_PAGE:

        SamplePageCreate::insertPersonDetails(
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '00000000'
            ]);

        break;

    case REQUEST_HANDLE_CODEUNIT:

        SampleCodeUnit::updateAccountDetails(
            [
                'account_id' => 1,
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'phone' => '00000000'
            ]);

        break;
}