<?php

namespace PureSession;

trait SessionStarted {
    protected static function sessionStartedCheck() {
        if (!session_status() !== PHP_SESSION_ACTIVE) {
            throw new \RuntimeException('The session has not been started. Call PureSession::start() first.');
        }
    }
}