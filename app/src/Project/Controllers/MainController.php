<?php

namespace Project\Controllers;


use Project\Exceptions\InvalidArgumentException;
use Project\Models\Persons\Person;

class MainController extends AbstractController
{

    public function main()
    {

        $persons = Person::findAll();
        $totalPersons = count($persons);
        $totalAge = 0;

        for ($i = 0; $i < count($persons); $i++) {
            $totalAge += $persons[$i]->getAge();
        }

        $this->view->renderHtml('main/main.php', [
            'persons' => $persons,
            'totalPersons' => $totalPersons,
            'totalAge' => $totalAge
        ]);
    }


    public function create(): void
    {

        if (!empty($_POST)) {
            try {
                Person::createFromArray($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('main/main.php', ['error' => $e->getMessage()]);
                exit();
            }
            header('Location: /', true, 302);
            exit();
        }

        $this->view->renderHtml('main/main.php');
    }

    public function edit(int $personId)
    {
        $person = Person::getById($personId);

        if (!empty($_POST)) {
            try {
                $person->updateFromArray($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('main/edit', ['error' => $e->getMessage(), 'person' => $person]);
                return;
            }

            header('Location: /', true,302);
            exit();
        }


        $this->view->renderHtml('main/edit.php', [
            'person' => $person
        ]);

    }

    public function delete(int $personId): void
    {
        $person = Person::getById($personId);

        if ($person) {
            $person->delete();
            header('Location: /', true, 302);
            exit();
        }
        $this->view->renderHtml('main/main.php');
    }


}