<?php

namespace gpandovski\Select;

class HtmlSelect extends ASelect {
    public function makeSelect () {
        echo '<select class="form-control" name="' . parent::getName() . '">';
            parent::makeOptions(parent::getValue());
        echo '</select>';
    }
}