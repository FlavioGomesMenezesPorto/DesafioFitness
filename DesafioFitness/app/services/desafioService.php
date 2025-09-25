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
}
