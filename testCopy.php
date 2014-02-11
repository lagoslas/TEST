<?php
$file = 'C:\resolution.txt';
$newfile = 'C:\kak.txt';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>