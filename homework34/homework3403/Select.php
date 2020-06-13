<?php
class Select{
    public $name;
    public $value;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        if(is_array($value)) {
            foreach($value as $key => $browser) {
                $this->value[] = $browser;
            }
        }
    }

    private function makeOptions ($value) {
        foreach($value as $key) {
            echo "<option value=" . $key . ">" . ucfirst($key) . "</option>";
        }
    }

    public function makeSelect () {
        echo '<select class="form-control" name="' . $this->getName() . '" id="' . $this->getName() . '">';
            $this->makeOptions($this->value);
        echo '</select>';
    }
}