<?php

class Template{
    // Path To Template
    protected $template;
    // Vars Passed In
    protected $vars = array();

    // Constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function __get($key)
    {
        return $this->vars[$key];
    }

    public function __set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function __toString()
    {
        /*
        ** use to get just variables instead key/value
        ** ex.:
        ** to use
        ** $name;
        ** instead
        ** $template->name;
        */
        extract($this->vars);

        // to get the file path
        chdir(dirname($this->template));

        // output the template

        // start the buffer
        ob_start();

        // include the template path
        include basename($this->template);
        
        // end the buffer
        return ob_get_clean();
    }
}

?>