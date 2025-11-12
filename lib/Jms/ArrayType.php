<?php

namespace Webit\Comarch\EDI\Order\Jms;

final readonly class ArrayType implements \Stringable
{
    public function __construct(private mixed $type)
    {
    }

    public function __toString(): string
    {
        return sprintf('array<%s>', $this->type);
    }
}
