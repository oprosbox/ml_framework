<?php

class WFileBase {

    public $file_handle;

    public function copy($path_from, $path_to, &$report) {
        if (copy($path_from, $path_to)) {
            $report = "$report copy($path_from, $path_to): success" . PHP_EOL;
        } else {
            $report = "$report copy($path_from, $path_to): error" . PHP_EOL;
        }
        return $this;
    }

    public function rename($oldname, $newname, &$report) {
        if (rename($oldname, $newname)) {
            $report = "$report rename ($oldname, $newname): success" . PHP_EOL;
        } else {
            $report = "$report rename ($oldname, $newname): error" . PHP_EOL;
        }
        return $this;
    }

    public function unlink($filename, &$report) {
        if (unlink($filename)) {
            $report = "$report unlink ($filename): success" . PHP_EOL;
        } else {
            $report = "$report unlink ($filename): error" . PHP_EOL;
        }
        return $this;
    }

    public function move_uploaded_file($filename, $destination, &$report) {
        if (move_uploaded_file($filename, $destination)) {
            $report = "$report move_uploaded_file ( $filename ,$destination): success" . PHP_EOL;
        } else {
            $report = "$report move_uploaded_file ( $filename ,$destination): error" . PHP_EOL;
        }
        return $this;
    }

    public function fclose(&$report) {
        if (fclose($this->file_handle)) {
            $report = "$report fclose: success" . PHP_EOL;
        } else {
            $report = "$report fclose: error" . PHP_EOL;
        }
        return $this;
    }

    public function feof(&$report) {
        if (!empty($this->file_handle)) {
            
        } else {
            $report = "$report feof handle: error" . PHP_EOL;
        }
        return feof($this->file_handle);
    }

    public function fopen($filename, $mode, &$report) {
        $this->handle = fopen($filename, $mode);
        if (!empty($this->file_handle)) {
            $report = "$report fopen ($filename , $mode): success" . PHP_EOL;
        } else {
            $report = "$report fopen ($filename , $mode): error" . PHP_EOL;
        }
        return $this;
    }

    public function fgetc(&$file_simbol, &$report) {

        if ($this->file_handle) {
            $file_simbol = fgetc($this->file_handle);
            $report = "$report fgetc: success" . PHP_EOL;
        } else {
            $report = "$report fgetc: error" . PHP_EOL;
        }
        return $this;
    }

    public function fgets(&$file_string, &$report) {
        if ($this->file_handle) {
            $file_simbol = fgets($this->file_handle);
            $report = "$report fgets: success" . PHP_EOL;
        } else {
            $report = "$report fgets: error" . PHP_EOL;
        }
        return $this;
    }

    public static function file_exists($filename) {
        return file_exists($filename);
    }

    public function file_put_contents($filename, $data, &$report, $flags = FILE_APPEND) {
        if (file_put_contents($filename, $data, $flags) !== FALSE) {
            $report = "$report file_put_contents($filename ,data,$flags): success" . PHP_EOL;
        } else {
            $report = "$report file_put_contents($filename ,data,$flags): error" . PHP_EOL;
        }
        return $this;
    }

    public function file_get_contents(&$content, $filename, &$report) {
        $content = file_get_contents($filename);
        if ($content !== FALSE) {
            $report = "$report file_get_contents($filename): success" . PHP_EOL;
        } else {
            $report = "$report file_get_contents($filename): error" . PHP_EOL;
        }
        return $this;
    }

    public function fgetcsv(&$array_data, &$report, $length = 0, $delimiter = ",") {
        $array_data = fgetcsv($this->handle, $length, $delimiter);
        if ($array_data !== FALSE) {
            $report = "$report fgetcsv (array_data, $length , $delimiter): success" . PHP_EOL;
        } else {
            $report = "$report fgetcsv (array_data, $length , $delimiter): error" . PHP_EOL;
        }
        return $this;
    }

    public function fputcsv($fields_array, &$report, $delimiter = ",") {
        if (fputcsv($this->handle, $fields_array, $delimiter)) {
            $report = "$report fputcsv  (fields_array , $delimiter): success" . PHP_EOL;
        } else {
            $report = "$report fputcsv (fields_array , $delimiter): error" . PHP_EOL;
        }
        return $this;
    }

    public function fwrite($string, $length, &$size, &$report) {
        $size = fwrite($this->handle, $string, $length);
        if ($size !== FALSE) {
            $report = "$report fwrite ( string , $length): success" . PHP_EOL;
        } else {
            $report = "$report fwrite ( string , $length): error" . PHP_EOL;
        }
        return $this;
    }

    public static function is_file($filename) {
        return is_file($filename);
    }

    public static function is_readable($filename) {
        return is_readable($filename);
    }

    public static function filesize($filename) {
        return filesize($filename);
    }

}

