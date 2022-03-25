<?php
namespace miguel\aula_composer;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromCEP(string $CEP): array {
        $CEP = preg_replace('/[^0-9]/im', '', $CEP);
        $get = file_get_contents($this->url . $CEP . "/json");

        // print_r($get);

        return (array) json_decode($get);
    }
}