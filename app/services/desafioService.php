<?php

require_once '../app/dao/desafioDao.php';

class DesafioService {
    private $desafioDao;

    public function __construct() {
        $this->desafioDao = new DesafioDao();
    }

    public function getAll() {
        return $this->desafioDao->getAll();
    }

    public function getById($id) {
        return $this->desafioDao->getById($id);
    }

    public function create(Desafio $desafio) {
        return $this->desafioDao->create($desafio);
    }

    public function update(Desafio $desafio) {
        return $this->desafioDao->update($desafio);
    }

    public function delete($id) {
        return $this->desafioDao->delete($id);
    }
}