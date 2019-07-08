<?php
/**
 * Created by PhpStorm.
 * User: prubilar
 * Date: 13-12-18
 * Time: 23:19
 */
modificado
class auto
{

    var $marca;
    var $color;
    var $puertas;

    function __construct($marca,$color,$puertas)
    {
        $this->marca=$marca;
        $this->color=$color;
        $this->puertas=$puertas;
    }

    function acelerar(){
        return "este auto esta acelerando";
    }
  function bocina(){
        return "toca la bocina";
  }
}
$auto1 = new auto('mazda','plateado',4);


echo "Este auto es de marca $auto1->marca color $auto1->color y de $auto1->puertas puertas";
echo $auto1->acelerar();
echo $auto1->bocina();
