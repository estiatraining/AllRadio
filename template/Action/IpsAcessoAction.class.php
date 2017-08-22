<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IpsAcessoAction
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('IpsAcessoDao;CrudActionImp');
class IpsAcessoAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new IpsAcessoDao();
    }
    public function getDto() {
        return new IpsAcessoDto();
    }
}
?>
