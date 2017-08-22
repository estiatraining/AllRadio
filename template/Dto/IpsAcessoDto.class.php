<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IpsAcesso
 *
 * @author Cleison Ferreira
 */
class IpsAcessoDto implements Serializable{

    private $ipsacesso_id;
    private $ipsacesso_radio_id;
    private $ipsacesso_data;
    private $ipsacesso_hora;
    private $ipsacesso_ip;

    public function clear() {
        $this->ipsacesso_id = null;
        $this->ipsacesso_radio_id = null;
        $this->ipsacesso_data = null;
        $this->ipsacesso_hora = null;
        $this->ipsacesso_ip = null;
    }

    public function getIpsAcesso_id() {
        return $this->ipsacesso_id;
    }

    public function setIpsAcesso_id($ipsacesso_id) {
        $this->ipsacesso_id = $ipsacesso_id;
    }

    public function getIpsAcesso_radio_id() {
        return $this->ipsacesso_radio_id;
    }

    public function setIpsAcesso_radio_id($ipsacesso_radio_id) {
        $this->ipsacesso_radio_id = $ipsacesso_radio_id;
    }

    public function getIpsAcesso_data() {
        return $this->ipsacesso_data;
    }

    public function setIpsAcesso_data($ipsacesso_data) {
        $this->ipsacesso_data = $ipsacesso_data;
    }

    public function getIpsAcesso_hora() {
        return $this->ipsacesso_hora;
    }

    public function setIpsAcesso_hora($ipsacesso_hora) {
        $this->ipsacesso_hora = $ipsacesso_hora;
    }

    public function getIpsAcesso_ip() {
        return $this->ipsacesso_ip;
    }

    public function setIpsAcesso_ip($ipsacesso_ip) {
        $this->ipsacesso_ip = $ipsacesso_ip;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }
}
?>
