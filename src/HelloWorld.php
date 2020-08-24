<?php

namespace Thinkverse;

/**
 * Hello World Class.
 *
 * @author Kim <Thinkverse> Hallberg <hallberg.kim@gmail.com>
 * @license MIT
 */
class HelloWorld
{
    /**
     * Our Hello greeting.
     *
     * @var string $greeting
     */
    private $greeting = 'Hello {person}';

    /**
     * Token used for replacing
     * with our person.
     *
     * @var string $token
     */
    private $token = '{person}';

    /**
     * Variable holding our person
     * to be greeted later.
     *
     * @var string $person Optional Person to Greet.
     */
    private $person;

    public function __construct(?string $person = 'World')
    {
        $this->person = $person;
    }

    /**
     * Return our greeting.
     *
     * @return string Greeting -> Hello Person.
     */
    public function greeting(): string
    {
        return $this->translate();
    }

    /**
     * Greet a person.
     *
     * @param string $person Person to Greet.
     * @return string Greeting -> Hello Person.
     */
    public function greet(string $person): string
    {
        return $this->translate($person);
    }

    /**
     * Translate our greeting.
     *
     * @param string $greeting Optional Person to Greet.
     * @return string Greeting -> Hello Person.
     */
    private function translate(?string $person = null): string
    {
        return str_replace($this->token, $person ?? $this->person, $this->greeting);
    }

    /**
     * Return our greeting.
     *
     * @return string Greeting -> Hello Person.
     */
    public function __toString(): string
    {
        return $this->translate();
    }
}
