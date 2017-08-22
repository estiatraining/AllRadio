<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IpsAcessoDao
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('IpsAcessoDto;CrudDaoImp');
class IpsAcessoDao extends CrudDaoImp{
    public $dto;
    public function getDto() {
        return $this->dto;
    }
    public function setDto($obj){
        $this->dto = $obj;
    }
    public function getColumns() {
        $bean = $this->getDto();
        $array = Array('ipsacesso_id' => $bean->getIpsAcesso_id(),
                       'ipsacesso_radio_id' => $bean->getIpsAcesso_radio_id(),
                       'ipsacesso_data' => $bean->getIpsAcesso_data(),
                       'ipsacesso_hora' => $bean->getIpsAcesso_hora(),
                       'ipsacesso_ip' => $bean->getIpsAcesso_ip()
                );
        $columns = new ArrayObject($array);
        return $columns;
    }
    public function getTable() {
        return 'ipsacesso';
    }
}
?>
