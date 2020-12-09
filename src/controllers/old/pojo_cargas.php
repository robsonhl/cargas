<?php
    private $idcarga;
    private $data;
    private $linha_carga;
    private $reponsavel;
    private $faltas;


class PojoCargas {
    public function getIdcarga(){
        return $this->idcarga;
    }

    public function setIdcarga($idcarga){
        $this->idcarga = $idcarga;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getLinha_carga(){
        return $this->linha_carga;
    }

    public function setLinha_carga($linha_carga){
        $this->linha_carga = $linha_carga;
    }


    public function getReponsavel(){
        return $this->reponsavel;
    }

    public function setReponsavel($reponsavel){
        $this->reponsavel = $reponsavel;
    }

    public function getFaltas(){
        return $this->faltas;
    }

    public function setFaltas($faltas){
        $this->faltas = $faltas;
    }
}