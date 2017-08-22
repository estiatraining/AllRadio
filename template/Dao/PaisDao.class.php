<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaisDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('PaisDto;CrudDaoImp');
class PaisDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();
        $array = Array('pais_id' => $bean->getPais_id(),
                       'pais_nome' => $bean->getPais_nome(),
                       'pais_sigla' => $bean->getPais_sigla(),
                       'pais_codarea' => $bean->getPais_codarea(),
                       'pais_img_band' => $bean->getPais_img_band()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'pais';
    }
}
?>
