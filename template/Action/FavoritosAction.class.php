<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FavoritosAction
 *
 * @author Cleison Ferreira
 */
$__autoload = new LoadClass();
$__autoload->carregar('FavoritosDao;CrudActionImp');
class FavoritosAction extends CrudActionImp{
    //put your code here
    public function getDao() {
        return new FavoritosDao();
    }
    public function getDto() {
        return new FavoritosDto();
    }
}
?>
