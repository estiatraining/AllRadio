<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GenerosDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('GenerosDto;CrudDaoImp');
class GenerosDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();      
        $array = Array('generos_id' => $bean->getGeneros_id(),
                       'generos_nome' => $bean->getGeneros_nome(),
                       'generos_sts' => $bean->getGeneros_sts()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'generos';
    }
}
?>
