<?php
class conNguoi{
    public $name;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
$ten = new conNguoi();
$ten->set_name('Long');
echo $ten->get_name();

?>
