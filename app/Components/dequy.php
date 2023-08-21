<?php
namespace App\Components;
use App\Models\Categories;
class dequy {
    private $data;
    private $htmlSlelect = '';
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function categories_Dequy($id = 0, $text = ''){
    
        foreach($this->data as $value)
        {
            if($value['parent_id'] == $id)
            {
                $this->htmlSlelect .= "<option value='".$value['id']."'>".$text. $value['name']."</option>";
                $this->categories_Dequy($value['id'], $text.'-');
            }
        }
        return $this->htmlSlelect;
    }
}