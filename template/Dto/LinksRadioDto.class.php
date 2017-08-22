<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LinksRadio
 *
 * @author Cleison Ferreira
 */
class LinksRadioDto implements Serializable{
    private $linksradio_id;
    private $linksradio_desc;
    private $linksradio_sts;
    public function clear() {
        $this->linksradio_id = null;
        $this->linksradio_desc = null;
        $this->linksradio_sts = null;
    }
    public function getLinksRadio_id() {
        return $this->linksradio_id;
    }

    public function setLinksRadio_id($linksradio_id) {
        $this->linksradio_id = $linksradio_id;
    }

    public function getLinksRadio_desc() {
        return $this->linksradio_desc;
    }

    public function setLinksRadio_desc($linksradio_desc) {
        $this->linksradio_desc = $linksradio_desc;
    }
    public function getLinksRadio_sts() {
        return $this->linksradio_sts;
    }

    public function setLinksRadio_sts($linksradio_sts) {
        $this->linksradio_sts = $linksradio_sts;
    }

    public function serialize() {

    }

    public function unserialize($serialized) {

    }
}
?>
