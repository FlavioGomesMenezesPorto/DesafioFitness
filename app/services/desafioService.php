<?php

require_once '../app/dao/desafioDao.php';
require_once '../app/models/desafio.php';

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

    public function create($data) {
        $desafio = new Desafio();
        $desafio->setNome($data['nome']);
        $desafio->setDescricao($data['descricao']);
        return $this->desafioDao->create($desafio);
    }

    public function update($data) {
        $desafio = new Desafio();
        $desafio->setId($data['id']);
        $desafio->setNome($data['nome']);
        $desafio->setDescricao($data['descricao']);
        return $this->desafioDao->update($desafio);
    }
}