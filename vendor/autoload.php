<?php


class Autoloader
{
    protected array $prefixes = array();
    public function addNamespace($prefix, $dir)
    {
        if (is_dir($dir)) {
            $this->prefixes[$prefix] = $dir;
            return true;
        }
        return false;
    }
    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }
    protected function autoload($class)
    {
        $path = explode('\\', $class);
        if (is_array($path)) {
            $prefix = array_shift($path);
            if (!empty($this->prefixes[$prefix])) {
                $file = $this->prefixes[$prefix] . '/' . implode('/', $path) . '.php';
                var_dump($file);
                require $file;
                return true;
            }
        }
        return false;
    }
}
