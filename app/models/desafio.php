<?php

class Desafio {
    private $id;
    private $nome;
    private $descricao;
    private $data_inicio;
    private $data_fim;
    private $status;

    // Getters e Setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDataInicio() {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function getDataFim() {
        return $this->data_fim;
    }

    public function setDataFim($data_fim) {
        $this->data_fim = $data_fim;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
