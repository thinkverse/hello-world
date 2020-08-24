<?php

use Thinkverse\HelloWorld;

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    /** @var $hello */
    private $hello;

    protected function setUp(): void
    {
        parent::setUp();

        $this->hello = new HelloWorld();
    }

    /**
     * Sanity check.
     *
     * @return void
     */
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(HelloWorld::class, new HelloWorld(), 'Provided class not instanceof HelloWorld');
    }

    /**
     * Assert HelloWorld#toString
     * returns the correct string.
     *
     * @return void
     */
    public function testToStringReturnsOurDefaultGreetingWhenNoArgumentsPassedToConstructor(): void
    {
        $this->assertEquals('Hello World', $this->hello, 'HelloWorld#toString does not return expected Result');
    }

    /**
     * Assert HelloWorld#greeting
     * returns the correct string.
     *
     * @return void
     */
    public function testGreetingReturnsCorrectDefaultGreetingWhenNoArgumentsPassedToConstructor(): void
    {
        $this->assertEquals('Hello World', $this->hello->greeting(), 'HelloWorld#greeting does not return expected Result');
    }

    /**
     * Assert HelloWorld#greeting
     * returns the correct string.
     *
     * @return void
     */
    public function testPassingConstructorArgumentChangesOurGreetingCorrectly(): void
    {
        $newHelloWorld = new HelloWorld('John Doe');
        $this->assertEquals('Hello John Doe', $newHelloWorld->greeting(), 'HelloWorld#greeting does not return expected Result');
    }

    /**
     * Assert HelloWorld#greet
     * returns the correct string.
     *
     * @return void
     */
    public function testPassingArgumentToGreetReturnsCorrectGreeting(): void
    {
        $this->assertEquals('Hello John Doe', $this->hello->greet('John Doe'), 'HelloWorld#greet does not return expected Result');
    }

    /**
     * Assert HelloWorld#greet
     * does not mess with rest
     * of our class.
     *
     * @return void
     */
    public function testPassingArgumentToGreetDoesNotChangeOurDefaultPerson(): void
    {
        $helloGreet = new HelloWorld();
        $this->assertEquals('Hello John Doe', $helloGreet->greet('John Doe'), 'HelloWorld#greet does not return expected Result');
        $this->assertEquals('Hello World', $helloGreet, 'HelloWorld#toString does not return expected Result');
    }
}
