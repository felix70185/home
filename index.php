<?php
namespace test\shop;

ini_set("display_errors", true);

echo "Hello world";

abstract class DomainObject
{
    public static function create() : DomainObject
    {
        return new static();
    }
}

class User extends DomainObject
{

}

class Document extends DomainObject
{

}

print_r(Document::create());