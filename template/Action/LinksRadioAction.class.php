<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LinksRadioAction
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('LinksRadioDao;CrudActionImp');
class LinksRadioAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new LinksRadioDao();
    }
    public function getDto() {
        return new LinksRadioDto();
    }
}
?>
