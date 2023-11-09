<?php

include_once('Person.php');

class Controller {
    private $persons = [];

    function addPerson($nome, $email, $cpf) {
        $person = new Person($nome, $email, $cpf);
        $this->persons[] = $person;
    }

    function saveToFile() {
        $file = fopen('logs.txt', 'a');
        foreach ($this->persons as $person) {
            fwrite($file, $person->getNome() . "|" . $person->getEmail() . "|" . $person->getCpf() . "\n");
        }
        fclose($file);
    }    

    function getPersons() {
        return $this->persons;
    }

    function delete() {
        
    }

}
?>

