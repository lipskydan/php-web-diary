<?php

class DiaryPost
{
    private $header_topic = '';
    private $text = '';


    function __construct($header_topic, $text){
        $this->header_topic = $header_topic;
        $this->text = $text;
    }

    function set_header_topic($header_topic){
        $this->header_topic = $header_topic;
    }

    function get_header_topic(){
        return $this->header_topic;
    }

    function set_text($text){
        $this->text = $text;
    }

    function get_text(){
        return $this->text;
    }
}