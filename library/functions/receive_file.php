<?php

require_once 'commands.php';

class WReceive_file_base {

    protected $file;
    protected $name_post;

      public function get_tmp_file(&$file, &$report) {
        if (!empty($this->file)) {
            $file = $this->file['tmp_name'];
            $report = "$report get_tmp_file: success" . PHP_EOL;
        } else {
            $report = "$report get_tmp_file: error" . PHP_EOL;
        }
        return $this;
    }
    
    public function get_file(&$file, &$report) {
        if (!empty($this->file)) {
            $file = file_get_contents($this->file['tmp_name']);
            $report = "$report get_file: success" . PHP_EOL;
        } else {
            $report = "$report get_file: error" . PHP_EOL;
        }
        return $this;
    }

    public function get_file_size(&$file_size, &$report) {
        if (!empty($this->file)) {
            $report = "$report get_file_size: success" . PHP_EOL;
            $file_size = $this->file['size'];
        } else {
            $report = "$report get_file_size: error" . PHP_EOL;
        }
        return $this;
    }

    public function get_file_type(&$file_type, &$report) {
        if (!empty($this->file)) {
            $report = "$report get_file_type: success" . PHP_EOL;
            $file_type = $this->file['type'];
        } else {
            $report = "$report get_file_type: error" . PHP_EOL;
        }
        return $this;
    }

    public function get_error(&$error, &$report) {
        if (!empty($this->file)) {
            $report = "$report get_error: success" . PHP_EOL;
            $error = $this->file['error'];
        } else {
            $report = "$report get_error: error" . PHP_EOL;
        }
        return $this;
    }

    public function get_name_file(&$begin_name, &$report) {
        if (!empty($this->file)) {
            $report = "$report get_name_file: success" . PHP_EOL;
            $begin_name = $this->file['name'];
        } else {
            $report = "$report get_name_file: error" . PHP_EOL;
        }
        return $this;
    }

    public function get_name_post(&$name_post, &$report) {
        if (!empty($this->file)) {
            $report = "$report get_name_post: success" . PHP_EOL;
            $name_post = $this->name_post;
        } else {
            $report = "$report get_name_post: error" . PHP_EOL;
        }
        return $this;
    }

    public function receive_file($name_post, &$ErrorDescription) {
        $this->name_post = '';
        if (!empty($_FILES[$name_post])) {
            $this->file = $_FILES[$name_post];
            $this->name_post = $name_post;
        } else {
            $ErrorDescription = "error received file";
        }
          return $this;
    }

}

//-----------------------------------------------------------------------------------
class WFunct_get_file implements WFunct {

    public $receive_file_base;
    public $error_description;

    public function __construct() {
        $error_description = new WReceive_file_base;
    }

    public function operation($name_post) {
        $receive_file_base->receive_file($name_post, $error_description);
        //дописывается для каждого пост запроса отдельно
    }

}

class WFile_list extends WCommand_list {//получение нескольких файлов за одну отправку

    public function release_commands(...$name_post) {
        foreach ($name_post as $name)
            if (!empty($_FILES[$name])) {
                parent::start($name,$name);
            }
    }

}
