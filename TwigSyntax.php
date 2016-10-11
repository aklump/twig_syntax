<?php
namespace AKlump\TwigSyntax;


class TwigSyntax
{
    protected $value;

    public function set($value)
    {
        $this->value = $value;

        return $this;
    }

    public function merge(&$return)
    {
        $args = func_get_args();
        foreach ($args as $arg) {
            $return = array_merge($this->value, $arg);
        }

        return $this;
    }
}
