<?php


class WCatalogBase {

    public $dir_handle;

    public function chdir($directory, &$report) {
        if (chdir($directory)) {
            $report = "$report chdir(" . $directory . "): success" . PHP_EOL;
        } else {
            $report = "$report chdir(" . $directory . "): error" . PHP_EOL;
        }
        return $this;
    }

    public function mkdir($pathname, &$report, $mode = 0777, $recursive = FALSE) {
        if (mkdir($pathname, $mode, $recursive)) {
            $report = "$report mkdir(" . $directory . "): success" . PHP_EOL;
        } else {
            $report = "$report mkdir(" . $directory . "): error" . PHP_EOL;
        }
        return $this;
    }

    public function rmdir($directory, &$report) {
        if (rmdir($directory)) {
            $report = "$report rmdir(" . $directory . "): success" . PHP_EOL;
        } else {
            $report = "$report rmdir(" . $directory . "): error" . PHP_EOL;
        }
        return $this;
    }

    public static function is_dir($directory) {
        return is_dir($directory);
    }

    public function chroot($directory, &$report) {
        if (chroot($directory)) {
            $report = "$report chroot(" . $directory . "): success" . PHP_EOL;
        } else {
            $report = "$report chroot(" . $directory . "): error" . PHP_EOL;
        }
        return $this;
    }

    public function closedir() {
        closedir($this->dir_handle);
        return $this;
    }

    public function opendir($directory, &$report) {
        $this->dir_handle = opendir($directory);
        if ($this->dir_handle) {
            $report = "$report opendir($directory): success" . PHP_EOL;
        } else {
            $report = "$report opendir($directory): error" . PHP_EOL;
        }
        return $this;
    }

    public function getcwd(&$name_this_cat) {
        $name_this_cat = getcwd();
        return $this;
    }

    public function readdir(&$name_next_dir) {
        $name_next_dir = readdir($this->dir_handle);
        return $this;
    }

    public function rewinddir(&$report) {
        if (rewinddir($this->dir_handle)) {
            $report = "$report rewinddir: success" . PHP_EOL;
        } else {
            $report = "$report rewinddir: error" . PHP_EOL;
        }
    }

    public function scandir($directory, &$list_dir, $sorting_order = SCANDIR_SORT_ASCENDING) {
        $list_dir = scandir($directory, $sorting_order);
        return $this;
    }

    public function rename($oldname, $newname, &$report) {
        if (rename($oldname, $newname)) {
            $report = "$report rename($oldname ,$newname): success" . PHP_EOL;
        } else {
            $report = "$report rename: error" . PHP_EOL;
        }
        return $this;
    }

}
