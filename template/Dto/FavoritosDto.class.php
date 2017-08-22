<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FavoritosDto
 *
 * @author Cleison Ferreira
 */
class FavoritosDto implements Serializable {

    private $favoritos_id;
    private $favoritos_ip;
    private $favoritos_nivel;
    private $favoritos_data;

    public function clear() {
        $this->favoritos_id = null;
        $this->favoritos_ip = null;
        $this->favoritos_nivel = null;
        $this->favoritos_data = null;
    }

    public function getFavoritos_id() {
        return $this->favoritos_id;
    }

    public function setFavoritos_id($favoritos_id) {
        $this->favoritos_id = $favoritos_id;
    }

    public function getFavoritos_ip() {
        return $this->favoritos_ip;
    }

    public function setFavoritos_ip($favoritos_ip) {
        $this->favoritos_ip = $favoritos_ip;
    }

    public function getFavoritos_nivel() {
        return $this->favoritos_nivel;
    }

    public function setFavoritos_nivel($favoritos_nivel) {
        $this->favoritos_nivel = $favoritos_nivel;
    }

    public function getFavoritos_data() {
        return $this->favoritos_data;
    }

    public function setFavoritos_data($favoritos_data) {
        $this->favoritos_data = $favoritos_data;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }

}

?>
