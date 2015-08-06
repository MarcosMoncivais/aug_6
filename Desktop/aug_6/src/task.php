<?php
class Task
{
    private $miles;
    private $make_model
    private $price

    function __construct($description)
    {
        $this->description = $description;
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }
}
?>
