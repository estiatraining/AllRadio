<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RadioDto
 *
 * @author Cleison Ferreira
 */
class RadioDto implements Serializable {

    private $radio_id;
    private $radio_linksradio_id;
    private $radio_pais_id;
    private $radio_generos_id;
    private $radio_nome;
    private $radio_sts;
    private $radio_data;

    public function clear() {
        $this->radio_id = null;
        $this->radio_linksradio_id = null;
        $this->radio_pais_id = null;
        $this->radio_generos_id = null;
        $this->radio_nome = null;
        $this->radio_sts = null;
        $this->radio_data = null;
    }

    public function getRadio_id() {
        return $this->radio_id;
    }

    public function setRadio_id($radio_id) {
        $this->radio_id = $radio_id;
    }

    public function getRadio_linksradio_id() {
        return $this->radio_linksradio_id;
    }

    public function setRadio_linksradio_id($radio_linksradio_id) {
        $this->radio_linksradio_id = $radio_linksradio_id;
    }

    public function getRadio_pais_id() {
        return $this->radio_pais_id;
    }

    public function setRadio_pais_id($radio_pais_id) {
        $this->radio_pais_id = $radio_pais_id;
    }

    public function getRadio_generos_id() {
        return $this->radio_generos_id;
    }

    public function setRadio_generos_id($radio_generos_id) {
        $this->radio_generos_id = $radio_generos_id;
    }

    public function getRadio_nome() {
        return $this->radio_nome;
    }

    public function setRadio_nome($radio_nome) {
        $this->radio_nome = $radio_nome;
    }

    public function getRadio_sts() {
        return $this->radio_sts;
    }

    public function setRadio_sts($radio_sts) {
        $this->radio_sts = $radio_sts;
    }

    public function getRadio_data() {
        return $this->radio_data;
    }

    public function setRadio_data($radio_data) {
        $this->radio_data = $radio_data;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }
}
?>
