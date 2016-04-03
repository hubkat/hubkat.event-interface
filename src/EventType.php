<?php
// @codingStandardsIgnoreFile

namespace Hubkat\EventInterface;

class EventType
{
    const EVENT_COMMIT_COMMENT              = 'commit_comment';
    const EVENT_CREATE                      = 'create';
    const EVENT_DELETE                      = 'delete';
    const EVENT_DEPLOYMENT                  = 'deployment';
    const EVENT_DEPLOYMENT_STATUS           = 'deployment_status';
    const EVENT_FORK                        = 'fork';
    const EVENT_GOLLUM                      = 'gollum';
    const EVENT_ISSUE_COMMENT               = 'issue_comment';
    const EVENT_ISSUES                      = 'issues';
    const EVENT_MEMBER                      = 'member';
    const EVENT_MEMBERSHIP                  = 'membership';
    const EVENT_PAGE_BUILD                  = 'page_build';
    const EVENT_PING                        = 'ping';
    const EVENT_PUBLIC                      = 'public';
    const EVENT_PULL_REQUEST_REVIEW_COMMENT = 'pull_request_review_comment';
    const EVENT_PULL_REQUEST                = 'pull_request';
    const EVENT_PUSH                        = 'push';
    const EVENT_REPOSITORY                  = 'repository';
    const EVENT_RELEASE                     = 'release';
    const EVENT_STATUS                      = 'status';
    const EVENT_TEAM_ADD                    = 'team_add';
    const EVENT_WATCH                       = 'watch';

    const TYPES = [
        self::EVENT_COMMIT_COMMENT,
        self::EVENT_CREATE,
        self::EVENT_DELETE,
        self::EVENT_DEPLOYMENT,
        self::EVENT_DEPLOYMENT_STATUS,
        self::EVENT_FORK,
        self::EVENT_GOLLUM,
        self::EVENT_ISSUE_COMMENT,
        self::EVENT_ISSUES,
        self::EVENT_MEMBER,
        self::EVENT_MEMBERSHIP,
        self::EVENT_PAGE_BUILD,
        self::EVENT_PING,
        self::EVENT_PUBLIC,
        self::EVENT_PULL_REQUEST_REVIEW_COMMENT,
        self::EVENT_PULL_REQUEST,
        self::EVENT_PUSH,
        self::EVENT_REPOSITORY,
        self::EVENT_RELEASE,
        self::EVENT_STATUS,
        self::EVENT_TEAM_ADD,
        self::EVENT_WATCH,
    ];

    final private function __construct()
    {
    }
}
