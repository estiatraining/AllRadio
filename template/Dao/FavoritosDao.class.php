<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FavoritosDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('FavoritosDto;CrudDaoImp');
class FavoritosDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();
        $array = Array('favoritos_id' => $bean->getFavoritos_id(),
                       'favoritos_ip' => $bean->getFavoritos_ip(),
                       'favoritos_nivel' => $bean->getFavoritos_nivel(),
                       'favoritos_data' => $bean->getFavoritos_data()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'favoritos';
    }
}
?>
