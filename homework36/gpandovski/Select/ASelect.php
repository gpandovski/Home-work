<?php

namespace gpandovski\Select;

abstract class ASelect {
    protected $name;
    protected $value;

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

    protected function makeOptions ($value) {
        foreach($value as $key) {
            echo "<option value=" . $key . ">" . ucwords($key) . "</option>";
        }
    }

    abstract public function makeSelect ();
}