<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaisAction
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('PaisDao;CrudActionImp');
class PaisAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new PaisDao();
    }
    public function getDto() {
        return new PaisDto();
    }
}
?>
