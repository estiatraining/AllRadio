<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RadioAction
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('GenerosDao;CrudActionImp');
class GenerosAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new GenerosDao();
    }
    public function getDto() {
        return new GenerosDto();
    }
}
?>
