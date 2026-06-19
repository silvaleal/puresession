<?php

namespace PureSession;

class Session
{

    # Método para verificar se a sessão está iniciada no site.
    public function started(): bool
    {
        return (session_status() === PHP_SESSION_ACTIVE) ? true : false;
    }

    # Método para iniciar a sessão, no código do usuário, ele não usa o mais o `session_start();`, já que este método utiliza internamente.
    public function start()
    {
        session_start();
    }

    # Método para destroir a sessão, no código do usuário, ele não usa o mais o `session_destroy();`, já que este método utiliza internamente.
    public function destroy()
    {
        session_destroy();
    }

    # Método para definir um valor.
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get($key)
    {
        return $_SESSION[$key];
    }
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
    public function flash($key)
    {
        $message = $this->get($key);
        $this->remove($key);
        return $message;
    }
}
