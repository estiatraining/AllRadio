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
$__autoload->carregar('RadioDao;CrudActionImp');
class RadioAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new RadioDao();
    }
    public function getDto() {
        return new RadioDto();
    }
}
?>
