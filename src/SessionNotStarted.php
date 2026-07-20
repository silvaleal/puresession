<?php

trait SessionNotStarted {
    protected static function sessionNotStartedCheck() {
        if (!session_status() === PHP_SESSION_ACTIVE) {
            throw new \RuntimeException('The session has been started. Call PureSession::destroy() first.');
        }
    }
}