<?php

namespace NF_FU_LIB;

// This file was auto-generated from sdk-root/src/data/detective/2018-10-26/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-10-26', 'endpointPrefix' => 'api.detective', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Detective', 'serviceId' => 'Detective', 'signatureVersion' => 'v4', 'signingName' => 'detective', 'uid' => 'detective-2018-10-26'], 'operations' => ['AcceptInvitation' => ['name' => 'AcceptInvitation', 'http' => ['method' => 'PUT', 'requestUri' => '/invitation'], 'input' => ['shape' => 'AcceptInvitationRequest'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'CreateGraph' => ['name' => 'CreateGraph', 'http' => ['method' => 'POST', 'requestUri' => '/graph'], 'output' => ['shape' => 'CreateGraphResponse'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'InternalServerException']]], 'CreateMembers' => ['name' => 'CreateMembers', 'http' => ['method' => 'POST', 'requestUri' => '/graph/members'], 'input' => ['shape' => 'CreateMembersRequest'], 'output' => ['shape' => 'CreateMembersResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException'], ['shape' => 'ServiceQuotaExceededException']]], 'DeleteGraph' => ['name' => 'DeleteGraph', 'http' => ['method' => 'POST', 'requestUri' => '/graph/removal'], 'input' => ['shape' => 'DeleteGraphRequest'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'DeleteMembers' => ['name' => 'DeleteMembers', 'http' => ['method' => 'POST', 'requestUri' => '/graph/members/removal'], 'input' => ['shape' => 'DeleteMembersRequest'], 'output' => ['shape' => 'DeleteMembersResponse'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'DisassociateMembership' => ['name' => 'DisassociateMembership', 'http' => ['method' => 'POST', 'requestUri' => '/membership/removal'], 'input' => ['shape' => 'DisassociateMembershipRequest'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'GetMembers' => ['name' => 'GetMembers', 'http' => ['method' => 'POST', 'requestUri' => '/graph/members/get'], 'input' => ['shape' => 'GetMembersRequest'], 'output' => ['shape' => 'GetMembersResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'ListGraphs' => ['name' => 'ListGraphs', 'http' => ['method' => 'POST', 'requestUri' => '/graphs/list'], 'input' => ['shape' => 'ListGraphsRequest'], 'output' => ['shape' => 'ListGraphsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListInvitations' => ['name' => 'ListInvitations', 'http' => ['method' => 'POST', 'requestUri' => '/invitations/list'], 'input' => ['shape' => 'ListInvitationsRequest'], 'output' => ['shape' => 'ListInvitationsResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ValidationException']]], 'ListMembers' => ['name' => 'ListMembers', 'http' => ['method' => 'POST', 'requestUri' => '/graph/members/list'], 'input' => ['shape' => 'ListMembersRequest'], 'output' => ['shape' => 'ListMembersResponse'], 'errors' => [['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]], 'RejectInvitation' => ['name' => 'RejectInvitation', 'http' => ['method' => 'POST', 'requestUri' => '/invitation/removal'], 'input' => ['shape' => 'RejectInvitationRequest'], 'errors' => [['shape' => 'ConflictException'], ['shape' => 'InternalServerException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ValidationException']]]], 'shapes' => ['AcceptInvitationRequest' => ['type' => 'structure', 'required' => ['GraphArn'], 'members' => ['GraphArn' => ['shape' => 'GraphArn']]], 'Account' => ['type' => 'structure', 'required' => ['AccountId', 'EmailAddress'], 'members' => ['AccountId' => ['shape' => 'AccountId'], 'EmailAddress' => ['shape' => 'EmailAddress']]], 'AccountId' => ['type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^[0-9]+$'], 'AccountIdList' => ['type' => 'list', 'member' => ['shape' => 'AccountId'], 'max' => 50, 'min' => 1], 'AccountList' => ['type' => 'list', 'member' => ['shape' => 'Account'], 'max' => 50, 'min' => 1], 'ConflictException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 409], 'exception' => \true], 'CreateGraphResponse' => ['type' => 'structure', 'members' => ['GraphArn' => ['shape' => 'GraphArn']]], 'CreateMembersRequest' => ['type' => 'structure', 'required' => ['GraphArn', 'Accounts'], 'members' => ['GraphArn' => ['shape' => 'GraphArn'], 'Message' => ['shape' => 'EmailMessage'], 'Accounts' => ['shape' => 'AccountList']]], 'CreateMembersResponse' => ['type' => 'structure', 'members' => ['Members' => ['shape' => 'MemberDetailList'], 'UnprocessedAccounts' => ['shape' => 'UnprocessedAccountList']]], 'DeleteGraphRequest' => ['type' => 'structure', 'required' => ['GraphArn'], 'members' => ['GraphArn' => ['shape' => 'GraphArn']]], 'DeleteMembersRequest' => ['type' => 'structure', 'required' => ['GraphArn', 'AccountIds'], 'members' => ['GraphArn' => ['shape' => 'GraphArn'], 'AccountIds' => ['shape' => 'AccountIdList']]], 'DeleteMembersResponse' => ['type' => 'structure', 'members' => ['AccountIds' => ['shape' => 'AccountIdList'], 'UnprocessedAccounts' => ['shape' => 'UnprocessedAccountList']]], 'DisassociateMembershipRequest' => ['type' => 'structure', 'required' => ['GraphArn'], 'members' => ['GraphArn' => ['shape' => 'GraphArn']]], 'EmailAddress' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^.+@.+$'], 'EmailMessage' => ['type' => 'string', 'max' => 1000, 'min' => 1], 'ErrorMessage' => ['type' => 'string'], 'GetMembersRequest' => ['type' => 'structure', 'required' => ['GraphArn', 'AccountIds'], 'members' => ['GraphArn' => ['shape' => 'GraphArn'], 'AccountIds' => ['shape' => 'AccountIdList']]], 'GetMembersResponse' => ['type' => 'structure', 'members' => ['MemberDetails' => ['shape' => 'MemberDetailList'], 'UnprocessedAccounts' => ['shape' => 'UnprocessedAccountList']]], 'Graph' => ['type' => 'structure', 'members' => ['Arn' => ['shape' => 'GraphArn'], 'CreatedTime' => ['shape' => 'Timestamp']]], 'GraphArn' => ['type' => 'string', 'pattern' => '^arn:aws[-\\w]{0,10}?:detective:[-\\w]{2,20}?:\\d{12}?:graph:[abcdef\\d]{32}?$'], 'GraphList' => ['type' => 'list', 'member' => ['shape' => 'Graph']], 'InternalServerException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 500], 'exception' => \true], 'ListGraphsRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'PaginationToken'], 'MaxResults' => ['shape' => 'MemberResultsLimit']]], 'ListGraphsResponse' => ['type' => 'structure', 'members' => ['GraphList' => ['shape' => 'GraphList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'ListInvitationsRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'PaginationToken'], 'MaxResults' => ['shape' => 'MemberResultsLimit']]], 'ListInvitationsResponse' => ['type' => 'structure', 'members' => ['Invitations' => ['shape' => 'MemberDetailList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'ListMembersRequest' => ['type' => 'structure', 'required' => ['GraphArn'], 'members' => ['GraphArn' => ['shape' => 'GraphArn'], 'NextToken' => ['shape' => 'PaginationToken'], 'MaxResults' => ['shape' => 'MemberResultsLimit']]], 'ListMembersResponse' => ['type' => 'structure', 'members' => ['MemberDetails' => ['shape' => 'MemberDetailList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'MemberDetail' => ['type' => 'structure', 'members' => ['AccountId' => ['shape' => 'AccountId'], 'EmailAddress' => ['shape' => 'EmailAddress'], 'GraphArn' => ['shape' => 'GraphArn'], 'MasterId' => ['shape' => 'AccountId'], 'Status' => ['shape' => 'MemberStatus'], 'InvitedTime' => ['shape' => 'Timestamp'], 'UpdatedTime' => ['shape' => 'Timestamp']]], 'MemberDetailList' => ['type' => 'list', 'member' => ['shape' => 'MemberDetail']], 'MemberResultsLimit' => ['type' => 'integer', 'box' => \true, 'max' => 200, 'min' => 1], 'MemberStatus' => ['type' => 'string', 'enum' => ['INVITED', 'VERIFICATION_IN_PROGRESS', 'VERIFICATION_FAILED', 'ENABLED']], 'PaginationToken' => ['type' => 'string', 'max' => 1024, 'min' => 1], 'RejectInvitationRequest' => ['type' => 'structure', 'required' => ['GraphArn'], 'members' => ['GraphArn' => ['shape' => 'GraphArn']]], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 404], 'exception' => \true], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 402], 'exception' => \true], 'Timestamp' => ['type' => 'timestamp'], 'UnprocessedAccount' => ['type' => 'structure', 'members' => ['AccountId' => ['shape' => 'AccountId'], 'Reason' => ['shape' => 'UnprocessedReason']]], 'UnprocessedAccountList' => ['type' => 'list', 'member' => ['shape' => 'UnprocessedAccount']], 'UnprocessedReason' => ['type' => 'string'], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => \true]]];
