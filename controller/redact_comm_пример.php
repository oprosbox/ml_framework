<?php

require_once '../library/functions.php';
require_once '../config.php';

class WPost_name_file implements WFunct{
    
  public function operation($post){
  $file=new WFileBase();
  $file->rename("..\\".DIR_SAVE_FILES."\\uploadfile", "..\\".DIR_SAVE_FILES."\\".$post, $report);
   echo "<p>name file</p>".PHP_EOL;   
  }  
}

class WPost_name_text implements WFunct{
  public function operation($post){
  $file=new WFileBase();
  $file->rename("..\\".DIR_SAVE_FILES."\\uploadtext","..\\".DIR_SAVE_FILES."\\$post", $report);
  echo "<p>$report</p>".PHP_EOL;   
  }  
}

class WPost_text implements WFunct{
  public function operation($post){
       $text=new WFileBase();
       $size; $report;
       $text->file_put_contents("..\\".DIR_SAVE_FILES."\\uploadtext",$post,$report);
    echo "<p>$report</p>".PHP_EOL;  
  }  
}

//-----------------------------------------------------------------------------------
class WPost_file implements WFunct {

    public $receive_file_base;
    public $error_description;
    
    public function __construct() {
        $this->receive_file_base = new WReceive_file_base;
    }

    public function operation($name_post) {
      $this->receive_file_base->receive_file($name_post, $this->error_description);
      $tmp_file;$report;
      $this->receive_file_base->get_tmp_file($tmp_file, $report);
      $file=new WFileBase();
      $file->rename($tmp_file, "..\\".DIR_SAVE_FILES."\\uploadfile", $report);
      echo "<p>get file $report</p>" . PHP_EOL;
    }

}

$file_list = new WFile_list;
$post_list = new WPost_list;

$post_file = new WPost_file;
$post_text = new WPost_text;
$post_name_text = new WPost_name_text;
$post_name_file = new WPost_name_file;

$file_list->add_method('file', $post_file);
$post_list->add_method('textarea', $post_text);
$post_list->add_method('name_text', $post_name_text);
$post_list->add_method('name_file', $post_name_file);

$file_list->release_commands('file');
$post_list->release_commands('name_file', 'textarea', 'name_text');
