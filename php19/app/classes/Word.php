<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $type;
    protected $result;

    public function __construct($post=null)
    {
        if ($post){

            $this->inputValue = $post['input_value'];
            $this->type =$post['$type'];
        }

    }

    public function index()
    {
//        if ( $this->type == 'word')
//        {
//            $this->result = str_word_count($this->inputValue);
//        }
//       else {
//           echo strlen($this->inputValue);
//       }
       $this->result =[
           'givenWord'      => 'given word' $this->inputValue,
           'wordCount'      =>str_word_count($this->inputValue),
           'characterCount' =>strlen($this->inputValue),
       ];
        return $this->result;
    }
}