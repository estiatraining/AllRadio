<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RadioDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('RadioDto;CrudDaoImp');
class RadioDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();
        $array = Array('radio_id' => $bean->getRadio_id(),
                       'radio_linksradio_id' => $bean->getRadio_linksradio_id(),
                       'radio_pais_id' => $bean->getRadio_pais_id(),
                       'radio_generos_id' => $bean->getRadio_generos_id(),
                       'radio_nome' => $bean->getRadio_nome(),
                       'radio_sts' => $bean->getRadio_sts(),
                       'radio_data' => $bean->getRadio_data()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'radio';
    }
}
?>
