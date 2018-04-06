<?php

    class ViewEngine{
        protected $templateDir = "./";
        protected $vars = array();

        public function __construct($templateDir = null){
            if( $templateDir !== null ){
                $this->templateDir = $templateDir;
            }
        }

        public function render($template_file){
            if( file_exists($this->templateDir.$template_file) ){
                include $this->templateDir.$template_file;
            } else {
                throw new Exception( "no template file ".$template_file." present in dir ".$this->templateDir);
            }
        }

        public function __set($name, $value){
            $this->vars[$name] = $value;
        }

        public function __get($name){
            return $this->vars[$name];
        }
    }

?>