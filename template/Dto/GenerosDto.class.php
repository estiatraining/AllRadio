<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Generos
 *
 * @author Cleison Ferreira
 */
class GenerosDto implements Serializable{
    private $generos_id;
    private $generos_nome;
    private $generos_sts;
    public function clear() {
        $this->generos_id = null;
        $this->generos_nome = null;
        $this->generos_sts = null;
    }
    public function getGeneros_id() {
        return $this->generos_id;
    }

    public function setGeneros_id($generos_id) {
        $this->generos_id = $generos_id;
    }

    public function getGeneros_nome() {
        return $this->generos_nome;
    }

    public function setGeneros_nome($generos_nome) {
        $this->generos_nome = $generos_nome;
    }
    public function getGeneros_sts() {
        return $this->generos_sts;
    }

    public function setGeneros_sts($generos_sts) {
        $this->generos_sts = $generos_sts;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }
}
?>
