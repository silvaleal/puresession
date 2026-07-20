<?php

namespace PureSession;

use SessionNotStarted;
use SessionStarted;

class PureSession
{
    use SessionStarted, SessionNotStarted;

    public static function started(): bool
    {
        return session_status() === PHP_SESSION_ACTIVE;
    }

    public static function start(): void
    {
        self::sessionNotStartedCheck();
        session_start();
    }

    public static function destroy(): void
    {
        self::sessionStartedCheck();
        session_destroy();
    }

    public static function set(string $key, mixed $value): void
    {
        self::sessionStartedCheck();
        $_SESSION[$key] = $value;
    }
    public static function get(string $key): mixed
    {
        self::sessionStartedCheck();
        return $_SESSION[$key] ?? null;
    }

    public static function has(string $key): bool
    {
        self::sessionStartedCheck();
        return isset($_SESSION[$key]);
    }

    public static function remove(string $key): void
    {
        self::sessionStartedCheck();
        unset($_SESSION[$key]);
    }
    public static function flash(string $key): string
    {
        $message = self::get($key);
        self::remove($key);
        return $message;
    }
}