<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 28.02.18
 * Time: 20:40
 */
require_once 'FormElement.php';
/**
 * Class SelectFormElement
 */
class SelectFormElement extends FormElement
{
    /**
     * Get a select element.
     *
     * @return string
     */
    public function render()
    {
        $options = null;
        $get_element_select = '<td><select name="' . $this->name . '" onchange="myFunction()">';
        $option[] = '<option value="">choose value</option>';
        foreach ($this->value as $row => $value) {
            if (!empty($_POST[$this->name])) {
                $select = 'selected = "selected"';

            } else {
                $select = '';
            }
            $option[] = '<option value="'.$row.'"' . $select . '>'.$value.'</option>';
            $options= implode(PHP_EOL, $option);
        }
        return $this->renderLabel(). $get_element_select . $options . '</select></td>';
    }

}
