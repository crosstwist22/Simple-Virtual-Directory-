<?php
  $directory_content  = array_filter(glob('*'), 'is_dir');
    foreach ($directory_content as $directory) {
      $directory_content_files = array_diff(scandir($directory), array('..', '.'));
      
      foreach ($directory_content_files as $directory_files){
          include $directory . '/' . $directory_files; 
          $directory_file = basename($directory_files,'.php');
          echo $directory . '=>' . $directory_file . "<br>";
      }
      
    }

    new Ikigami\Controller\Controller();
    new Ikigami\Modal\Modal();
    new Ikigami\View\View();
?>
