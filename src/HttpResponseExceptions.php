<?php

declare(strict_types=1);

namespace Ovvio\Exceptions;

/**
 * The HTTP exceptions
 */
final class HttpResponseExceptions extends BaseException
{
    private const int BASE_CODE = 1000;

    /**
     * @var array<int, string>
     */
    public const array CODES = [
        self::CODE_BAD_REQUEST => 'Bad Request',
        self::CODE_UNAUTHORIZED => 'Unauthorized',
        self::CODE_PAYMENT_REQUIRED => 'Payment Required',
        self::CODE_FORBIDDEN => 'Forbidden',
        self::CODE_NOT_FOUND => 'Not Found',
        self::CODE_METHOD_NOT_ALLOWED => 'Method Not Allowed',
        self::CODE_NOT_ACCEPTABLE => 'Not Acceptable',
        self::CODE_PROXY_AUTHENTICATION_REQUIRED => 'Proxy Authentication Required',
        self::CODE_REQUEST_TIMEOUT => 'Request Timeout',
        self::CODE_CONFLICT => 'Conflict',
        self::CODE_GONE => 'Conflict',
        self::CODE_LENGTH_REQUIRED => 'Length Required',
        self::CODE_PRECONDITION_FAILED => 'Precondition Failed',
        self::CODE_REQUEST_ENTITY_TOO_LARGE => 'Payload Too Large',
        self::CODE_REQUEST_URI_TOO_LONG => 'URI Too Long',
        self::CODE_UNSUPPORTED_MEDIA_TYPE => 'Unsupported Media Type',
        self::CODE_REQUESTED_RANGE_NOT_SATISFIABLE => 'Range Not Satisfiable',
        self::CODE_EXPECTATION_FAILED => 'Expectation Failed',
        self::CODE_I_AM_A_TEAPOT => 'I\'m a teapot',
        self::CODE_MISDIRECTED_REQUEST => 'Misdirected Request',
        self::CODE_UNPROCESSABLE_ENTITY => 'Unprocessable Entity',
        self::CODE_LOCKED => 'Locked',
        self::CODE_FAILED_DEPENDENCY => 'Failed Dependency',
        self::CODE_TOO_EARLY => 'Too Early',
        self::CODE_UPGRADE_REQUIRED => 'Upgrade Required',
        self::CODE_PRECONDITION_REQUIRED => 'Precondition Required',
        self::CODE_TOO_MANY_REQUESTS => 'Too Many Requests',
        self::CODE_REQUEST_HEADER_FIELDS_TOO_LARGE => 'Request Header Fields Too Large',
        self::CODE_UNAVAILABLE_FOR_LEGAL_REASONS => 'Unavailable For Legal Reasons',
        self::CODE_INTERNAL_SERVER_ERROR => 'Internal Server Error',
        self::CODE_NOT_IMPLEMENTED => 'Not Implemented',
        self::CODE_BAD_GATEWAY => 'Bad Gateway',
        self::CODE_SERVICE_UNAVAILABLE => 'Service Unavailable',
        self::CODE_GATEWAY_TIMEOUT => 'Gateway Timeout',
        self::CODE_VERSION_NOT_SUPPORTED => 'HTTP Version Not Supported',
        self::CODE_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL => 'Variant Also Negotiates',
        self::CODE_INSUFFICIENT_STORAGE => 'Insufficient Storage',
        self::CODE_LOOP_DETECTED => 'Loop Detected',
        self::CODE_NOT_EXTENDED => 'Not Extended',
        self::CODE_NETWORK_AUTHENTICATION_REQUIRED => 'Network Authentication Required',
    ];

    public const int CODE_BAD_REQUEST = self::BASE_CODE + 400;
    public const int CODE_UNAUTHORIZED = self::BASE_CODE + 401;
    public const int CODE_PAYMENT_REQUIRED = self::BASE_CODE + 402;
    public const int CODE_FORBIDDEN = self::BASE_CODE + 403;
    public const int CODE_NOT_FOUND = self::BASE_CODE + 404;
    public const int CODE_METHOD_NOT_ALLOWED = self::BASE_CODE + 405;
    public const int CODE_NOT_ACCEPTABLE = self::BASE_CODE + 406;
    public const int CODE_PROXY_AUTHENTICATION_REQUIRED = self::BASE_CODE + 407;
    public const int CODE_REQUEST_TIMEOUT = self::BASE_CODE + 408;
    public const int CODE_CONFLICT = self::BASE_CODE + 409;
    public const int CODE_GONE = self::BASE_CODE + 410;
    public const int CODE_LENGTH_REQUIRED = self::BASE_CODE + 411;
    public const int CODE_PRECONDITION_FAILED = self::BASE_CODE + 412;
    public const int CODE_REQUEST_ENTITY_TOO_LARGE = self::BASE_CODE + 413;
    public const int CODE_REQUEST_URI_TOO_LONG = self::BASE_CODE + 414;
    public const int CODE_UNSUPPORTED_MEDIA_TYPE = self::BASE_CODE + 415;
    public const int CODE_REQUESTED_RANGE_NOT_SATISFIABLE = self::BASE_CODE + 416;
    public const int CODE_EXPECTATION_FAILED = self::BASE_CODE + 417;
    public const int CODE_I_AM_A_TEAPOT = self::BASE_CODE + 418;
    public const int CODE_MISDIRECTED_REQUEST = self::BASE_CODE + 421;                    // RFC7540
    public const int CODE_UNPROCESSABLE_ENTITY = self::BASE_CODE + 422;                   // RFC4918
    public const int CODE_LOCKED = self::BASE_CODE + 423;                                 // RFC4918
    public const int CODE_FAILED_DEPENDENCY = self::BASE_CODE + 424;                      // RFC4918
    public const int CODE_TOO_EARLY = self::BASE_CODE + 425;                              // RFC-ietf-httpbis-replay-04
    public const int CODE_UPGRADE_REQUIRED = self::BASE_CODE + 426;                       // RFC2817
    public const int CODE_PRECONDITION_REQUIRED = self::BASE_CODE + 428;                  // RFC6585
    public const int CODE_TOO_MANY_REQUESTS = self::BASE_CODE + 429;                      // RFC6585
    public const int CODE_REQUEST_HEADER_FIELDS_TOO_LARGE = self::BASE_CODE + 431;        // RFC6585
    public const int CODE_UNAVAILABLE_FOR_LEGAL_REASONS = self::BASE_CODE + 451;          // RFC7725
    public const int CODE_INTERNAL_SERVER_ERROR = self::BASE_CODE + 500;
    public const int CODE_NOT_IMPLEMENTED = self::BASE_CODE + 501;
    public const int CODE_BAD_GATEWAY = self::BASE_CODE + 502;
    public const int CODE_SERVICE_UNAVAILABLE = self::BASE_CODE + 503;
    public const int CODE_GATEWAY_TIMEOUT = self::BASE_CODE + 504;
    public const int CODE_VERSION_NOT_SUPPORTED = self::BASE_CODE + 505;
    public const int CODE_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = self::BASE_CODE + 506;   // RFC2295
    public const int CODE_INSUFFICIENT_STORAGE = self::BASE_CODE + 507;                   // RFC4918
    public const int CODE_LOOP_DETECTED = self::BASE_CODE + 508;                          // RFC5842
    public const int CODE_NOT_EXTENDED = self::BASE_CODE + 510;                           // RFC2774
    public const int CODE_NETWORK_AUTHENTICATION_REQUIRED = self::BASE_CODE + 511;        // RFC6585
}
