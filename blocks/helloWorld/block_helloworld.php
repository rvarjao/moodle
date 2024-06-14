<?php
class block_helloworld extends block_base {
    public function init() {
        $this->title = get_string('helloworld', 'block_helloworld');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = 'Hello, World!';
        $this->content->footer = '';

        return $this->content;
    }
}
