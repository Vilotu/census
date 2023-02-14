<?php

namespace Project\Models\Persons;

use Project\Exceptions\InvalidArgumentException;
use Project\Models\ActiveRecordEntity;

class Person extends ActiveRecordEntity
{

    /** @var string */
    protected $name;

    /** @var int */
    protected $age;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public static function createFromArray(array $fields): Person
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано имя');
        }

        if (empty($fields['age'])) {
            throw new InvalidArgumentException('Не передан возраст');
        }

        $person = new Person();
        $person->setName($fields['name']);
        $person->setAge($fields['age']);

        $person->save();

        return $person;
    }

    public function updateFromArray(array $fields): Person
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано имя');
        }

        if (empty($fields['age'])) {
            throw new InvalidArgumentException('Не передан возраст');
        }

        $this->setName($fields['name']);
        $this->setAge($fields['age']);

        $this->save();

        return $this;

    }


    protected static function getTableName(): string
    {
        return 'persons';
    }
}