<?php declare(strict_types=1);

namespace Amadeus\Tests;

use Amadeus\Amadeus;
use Amadeus\Configuration;
use PHPUnit\Framework\TestCase;
use TypeError;

final class AmadeusTest extends TestCase
{
    public function testBuilder(): void
    {
        $this->assertTrue(
            Amadeus::builder("id", "secret") instanceof Configuration,
            "should return a Configuration"
        );
    }

    public function testBuilderWithNullClientId()
    {
        $this->expectException(TypeError::class);
        Amadeus::builder(null,"secret")->build();
    }

    public function testBuilderWithNullClientSecret()
    {
        $this->expectException(TypeError::class);
        Amadeus::builder("id",null)->build();
    }

}