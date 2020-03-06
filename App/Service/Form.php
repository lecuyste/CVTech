<?php
namespace App\Service;
/**
 *  class Form
 *  Permet de generer un formulaire
 */
class Form
{
    protected $post;
    protected $error;

    function __construct($error = array(),$method = 'post')
    {
        if($method == 'post') {
            $this->post = $_POST;
        } else {
            $this->post = $_GET;
        }
        $this->error = $error;
    }

    /**
     * @param $html string
     * @return string
     */
    private function arround($html)
    {
        return '<div class="form-control">'.$html.'</div>';
    }

    /**
     * @param $name string
     * @return string
     */
    private function getValue($name,$data)
    {
        if(!empty($data)) {
            return !empty($this->post[$name]) ? $this->post[$name] : $data ;
        } else {
            return !empty($this->post[$name]) ? $this->post[$name] : null ;
        }

    }
    /**
     * @param $name string
     * @return string
     */
    public function input($name, $placeholder = '', $type = 'text', $data = null, $keyup = null, $class = '')
    {
        return $this->arround('<input type="'.$type.'" id="'.$name.'" name="'.$name.'" placeholder = "'.$placeholder.'" value="'.$this->getValue($name,$data).'" onkeyup = "'.$keyup.'">', $class);
    }

    /**
     * @param $name
     * @param null $data
     * @return string
     */
    public function textarea($name, $placeholder = '', $data = null)
    {
        return $this->arround('<textarea name="'.$name.'" placeholder = "'.$placeholder.'" rows="10" cols="120">'.$this->getValue($name,$data).'</textarea>');
    }

    /**
     * @param $name string
     * @param $value string
     * @return string
     */
    public function submit($name = 'submitted',$value='Envoyer')
    {
        return '<input type="submit" name="'.$name.'" id="'.$name.'" value="'.$value.'">';
    }

    /**
     * @param $name
     * @return string|null
     */
    public function error($name)
    {
        if(!empty($this->error[$name])) {
            return '<span class="error">'.$this->error[$name].'</span>';
        }
        return null;
    }

    /**
     * @param $name
     * @return string
     */
    public function label($name)
    {
        return '<label for="'.$name.'">'.ucfirst($name).'</label>';
    }

    /**
     * @param $name
     * @param $entitys
     * @param $column
     * @return string
     */
    public function select($name, $entitys, $column, $idd = 'id')
    {
        $html = '<select name="'.$name.'">';
        foreach ($entitys as $entity) {
            $html .= '<option value="'.$entity->$idd.'">'.$entity->$column.'</option>';
        }
        $html .= '</select>';
        return $html;
    }
    public function inputCheckbox($type,$name,$value,$class=NULL)
    {
        return $this->arround('<input type="'.$type.'" id="'.$name.'" name="'.$name.'" class="'.$class.'" value="'
            .$value.'">');
    }
    public function selectCheckbox($name, $idname, $entitys, $column, $idd = 'id')
    {
        $html = '<select name="'.$name.'" id="'.$idname.'"multiple>';
        foreach ($entitys as $entity) {
            $html .= '<option value="'.$entity->$idd.'">'.$entity->$column.'</option>';
        }
        $html .= '</select>';
        return $html;
    }
    public function buttonAjoutInput($name, $list, $msg){
        return '<button type="button" id="' . $name . '" onclick="ajoutItems(\''.$list.'\')">' . $msg . '</button>';
    }
    public function buttonCloneDiv($name, $class, $msg){
        return '<button type="button" id="' . $name . '" onclick="cloneDiv(\''.$class.'\')">' . $msg . '</button>';
    }
    public function buttonRemoveClone($name, $cloneId, $msg){
        return '<button type="button" id="' . $name . '" onclick="removeClone(\''.$cloneId.'\')">' . $msg . '</button>';
    }
}
