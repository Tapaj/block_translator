<?php 

class block_translator extends block_base {
    public function init() {
        $this->title = get_string('translator', 'block_translator');
    }

    public function get_content() {
        if($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '<p>This content will be replaced soon...</p>';
        $this->content->footer = 'Powered by <b>Yandex Translator</b>';
    }
}