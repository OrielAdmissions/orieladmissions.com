<?php

namespace NF_FU_LIB;

// This file was auto-generated from sdk-root/src/data/data.iot/2015-05-28/api-2.json
return ['version' => '2.0', 'metadata' => ['uid' => 'iot-data-2015-05-28', 'apiVersion' => '2015-05-28', 'endpointPrefix' => 'data.iot', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS IoT Data Plane', 'signatureVersion' => 'v4', 'signingName' => 'iotdata'], 'operations' => ['DeleteThingShadow' => ['name' => 'DeleteThingShadow', 'http' => ['method' => 'DELETE', 'requestUri' => '/things/{thingName}/shadow'], 'input' => ['shape' => 'DeleteThingShadowRequest'], 'output' => ['shape' => 'DeleteThingShadowResponse'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidRequestException'], ['shape' => 'ThrottlingException'], ['shape' => 'UnauthorizedException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'InternalFailureException'], ['shape' => 'MethodNotAllowedException'], ['shape' => 'UnsupportedDocumentEncodingException']]], 'GetThingShadow' => ['name' => 'GetThingShadow', 'http' => ['method' => 'GET', 'requestUri' => '/things/{thingName}/shadow'], 'input' => ['shape' => 'GetThingShadowRequest'], 'output' => ['shape' => 'GetThingShadowResponse'], 'errors' => [['shape' => 'InvalidRequestException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'UnauthorizedException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'InternalFailureException'], ['shape' => 'MethodNotAllowedException'], ['shape' => 'UnsupportedDocumentEncodingException']]], 'Publish' => ['name' => 'Publish', 'http' => ['method' => 'POST', 'requestUri' => '/topics/{topic}'], 'input' => ['shape' => 'PublishRequest'], 'errors' => [['shape' => 'InternalFailureException'], ['shape' => 'InvalidRequestException'], ['shape' => 'UnauthorizedException'], ['shape' => 'MethodNotAllowedException']]], 'UpdateThingShadow' => ['name' => 'UpdateThingShadow', 'http' => ['method' => 'POST', 'requestUri' => '/things/{thingName}/shadow'], 'input' => ['shape' => 'UpdateThingShadowRequest'], 'output' => ['shape' => 'UpdateThingShadowResponse'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'RequestEntityTooLargeException'], ['shape' => 'InvalidRequestException'], ['shape' => 'ThrottlingException'], ['shape' => 'UnauthorizedException'], ['shape' => 'ServiceUnavailableException'], ['shape' => 'InternalFailureException'], ['shape' => 'MethodNotAllowedException'], ['shape' => 'UnsupportedDocumentEncodingException']]]], 'shapes' => ['ConflictException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'DeleteThingShadowRequest' => ['type' => 'structure', 'required' => ['thingName'], 'members' => ['thingName' => ['shape' => 'ThingName', 'location' => 'uri', 'locationName' => 'thingName']]], 'DeleteThingShadowResponse' => ['type' => 'structure', 'required' => ['payload'], 'members' => ['payload' => ['shape' => 'JsonDocument']], 'payload' => 'payload'], 'ErrorMessage' => ['type' => 'string'], 'GetThingShadowRequest' => ['type' => 'structure', 'required' => ['thingName'], 'members' => ['thingName' => ['shape' => 'ThingName', 'location' => 'uri', 'locationName' => 'thingName']]], 'GetThingShadowResponse' => ['type' => 'structure', 'members' => ['payload' => ['shape' => 'JsonDocument']], 'payload' => 'payload'], 'InternalFailureException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'InvalidRequestException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => \true], 'JsonDocument' => ['type' => 'blob'], 'MethodNotAllowedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 405], 'exception' => \true], 'Payload' => ['type' => 'blob'], 'PublishRequest' => ['type' => 'structure', 'required' => ['topic'], 'members' => ['topic' => ['shape' => 'Topic', 'location' => 'uri', 'locationName' => 'topic'], 'qos' => ['shape' => 'Qos', 'location' => 'querystring', 'locationName' => 'qos'], 'payload' => ['shape' => 'Payload']], 'payload' => 'payload'], 'Qos' => ['type' => 'integer', 'max' => 1, 'min' => 0], 'RequestEntityTooLargeException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 413], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ServiceUnavailableException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 503], 'exception' => \true, 'fault' => \true], 'ThingName' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_-]+'], 'ThrottlingException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 429], 'exception' => \true], 'Topic' => ['type' => 'string'], 'UnauthorizedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 401], 'exception' => \true], 'UnsupportedDocumentEncodingException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'errorMessage']], 'error' => ['httpStatusCode' => 415], 'exception' => \true], 'UpdateThingShadowRequest' => ['type' => 'structure', 'required' => ['thingName', 'payload'], 'members' => ['thingName' => ['shape' => 'ThingName', 'location' => 'uri', 'locationName' => 'thingName'], 'payload' => ['shape' => 'JsonDocument']], 'payload' => 'payload'], 'UpdateThingShadowResponse' => ['type' => 'structure', 'members' => ['payload' => ['shape' => 'JsonDocument']], 'payload' => 'payload'], 'errorMessage' => ['type' => 'string']]];
