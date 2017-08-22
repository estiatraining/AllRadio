<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LinksRadioDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('LinksRadioDto;CrudDaoImp');
class LinksRadioDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();
        $array = Array('linksradio_id' => $bean->getLinksRadio_id(),
                       'linksradio_desc' => $bean->getLinksRadio_desc(),
                       'linksradio_sts' => $bean->getLinksRadio_sts()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'linksradio';
    }
}
?>
