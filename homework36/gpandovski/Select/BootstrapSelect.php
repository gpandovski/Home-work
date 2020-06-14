<?php

namespace gpandovski\Select;

class BootstrapSelect {

    const BOOTSTRAP_FORM_CLASS = "form-group";
    const BOOTSTRAP_SELECT_CLASS = "form-control";

    public function makeSelect () {
        echo '<div class="BOOTSTRAP_FORM_CLASS">';
        echo '<select class="BOOTSTRAP_SELECT_CLASS" name="' . parent::getName() . '">';
            parent::makeOptions(parent::value);
        echo '</select>';
        echo '</div>';
    }
}