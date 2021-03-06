<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 28.02.18
 * Time: 20:42
 */
require_once 'FormElement.php';

/**
 * Class InputFormElement
 */
class InputFormElement extends FormElement
{
    private $_type;

    /**
     * InputFormElement constructor.
     *
     * @param string            $label     the title of element will be displayed in a browser.
     * @param string            $name      the element´s The name of the control, which is submitted with the form data.
     * @param string            $type      the type of input element.
     * @param $mandatory boolean $mandatory for check.
     *
     * @return set values
     */
    public function __construct($label, $name, $type, $mandatory)
    {
        parent::__construct($label, $name, $mandatory);
        $this->_type = $type;
    }

    /**
     * Get HTML element.
     *
     * @return string
     */
    public function render()
    {
        if ($this->mandatory == true) {
            if (!empty($_POST[$this->name])) {
                $value = $_POST[$this->name];
            } elseif (!empty($this->value)) {
                $value = $this->value;
            } else {
                $value = '';
            }if ($this->_type == 'submit') {
                $get_element = '<td><input type="'.$this->_type.'" name="' . $this->name . '" value="' .$this->label.'" ></td>';
            } elseif ($this->_type == 'readonly') {
                $get = '<td><input type="'.$this->_type.'" maxlength="15"  name="' . $this->name . '" value="' . $value . '" readonly ></td>';
                //$get = '<td><input type="'.$this->_type.'" maxlength="15" value="' . $value . '" name="' . $this->name . '" size="15" onkeyup="berechnen(this);" id="$this->name"></td>';

                $get_element = $this->renderLabel().$get;
            } else {

                $get = '<td><input type="'.$this->_type.'" maxlength="15"  name="' . $this->name . '" value="' . $value . '" ></td>';
                $get_element = $this->renderLabel().$get;
            }
            return $get_element;
        }
    }
}