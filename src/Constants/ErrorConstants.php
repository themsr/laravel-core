<?php
/**
 * Created by PhpStorm.
 * User: keshavashta
 * Date: 6/28/18
 * Time: 2:14 PM
 */

namespace Luezoid\Laravelcore\Constants;


class ErrorConstants
{

    const TYPE_INTERNAL_SERVER_ERROR = 'INTERNAL_SERVER_ERROR';
    const TYPE_FORBIDDEN_ERROR = 'FORBIDDEN_ERROR';
    const TYPE_VALIDATION_ERROR = 'VALIDATION';
    const TYPE_AUTHORIZATION_ERROR = 'AUTHORIZATION';

    const TYPE_METHOD_NOT_ALLOWED_ERROR = 'METHOD_NOT_ALLOWED';
    const TYPE_RESOURCE_NOT_FOUND_ERROR = 'RESOURCE_NOT_FOUND';
    const TYPE_SERVICE_NOT_IMPLEMENTED_ERROR = 'SERVICE_NOT_IMPLEMENTED';
    const TYPE_BUSINESS_LOGIC_ERROR = 'BUSINESS_LOGIC_ERROR';
    const TYPE_INVALID_CREDENTIALS_ERROR = 'INVALID_CREDENTIALS';
    const TYPE_BAD_REQUEST_ERROR = 'BAD_REQUEST';
    const TYPE_TOO_MANY_REQUEST_ERROR = 'TOO_MANY_REQUEST';

}