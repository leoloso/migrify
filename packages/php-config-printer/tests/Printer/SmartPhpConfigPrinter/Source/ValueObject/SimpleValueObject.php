<?php

declare(strict_types=1);

namespace Migrify\PhpConfigPrinter\Tests\Printer\SmartPhpConfigPrinter\Source\ValueObject;

final class SimpleValueObject
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
