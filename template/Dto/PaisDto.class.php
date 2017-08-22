<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descrimg_bandtion of PaisDto
 *
 * @author Cleison Ferreira
 */
class PaisDto implements Serializable{

    private $pais_id;
    private $pais_nome;
    private $pais_sigla;
    private $pais_codarea;
    private $pais_img_band;

    public function clear() {
        $this->pais_id = null;
        $this->pais_nome = null;
        $this->pais_sigla = null;
        $this->pais_codarea = null;
        $this->pais_img_band = null;
    }

    public function getPais_id() {
        return $this->pais_id;
    }

    public function setPais_id($pais_id) {
        $this->pais_id = $pais_id;
    }

    public function getPais_nome() {
        return $this->pais_nome;
    }

    public function setPais_nome($pais_nome) {
        $this->pais_nome = $pais_nome;
    }

    public function getPais_sigla() {
        return $this->pais_sigla;
    }

    public function setPais_sigla($pais_sigla) {
        $this->pais_sigla = $pais_sigla;
    }

    public function getPais_codarea() {
        return $this->pais_codarea;
    }

    public function setPais_codarea($pais_codarea) {
        $this->pais_codarea = $pais_codarea;
    }

    public function getPais_img_band() {
        return $this->pais_img_band;
    }

    public function setPais_img_band($pais_img_band) {
        $this->pais_img_band = $pais_img_band;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }
}
?>
