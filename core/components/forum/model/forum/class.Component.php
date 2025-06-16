<?php
class SplitForum
{
    public function __construct(modX &$modx)
    {
        $this->modx = $modx;
    }

    public function sayHello()
    {
        return 'Hello, ModX!';
    }
}
