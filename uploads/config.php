<?php
/*
Upload dirs(folders) list
- - - - - - - - - - - - - - - - - -
  "images" => array(
      "dir"     =>"uploads/images",
      "password"=>"images",
  ),
- - - - - - - - - - - - - - - - - -
"images" - just section name (any name you like), it is a key
"name" - the dir(folder) name in select box
"dir" - path to uploaded files
"password" - "dir" password
*/
$upload_dirs = array(
  "calidad" => array(
      "dir"     =>"calidad/",
      "name"    =>"Calidad",
      "password"=>"calidad",
  ),
  "certificadora" => array(
      "dir"     =>"certificadora/",
      "name"    =>"Certificadora",
      "password"=>"certificadora",
  ),
  "medioambiente" => array(
      "dir"     =>"medioambiente/",
      "name"    =>"Medioambiente",
      "password"=>"medioambiente",
  ),
  "prl" => array(
      "dir"     =>"prl/",
      "name"    =>"PRL",
      "password"=>"prl",
  ),
  "administrativos" => array(
      "dir"     =>"administrativos/",
      "name"    =>"Administrativos",
      "password"=>"administrativos",
  ),
  "legales" => array(
      "dir"     =>"legales/",
      "name"    =>"Legales",
      "password"=>"legales",
  ),
  "otros" => array(
      "dir"     =>"otros/",
      "name"    =>"Otros docs.",
      "password"=>"otros",
  ),
    "pdf" => array(
      "dir"     =>"pdf/",
      "name"    =>"pdf.",
      "password"=>"pdf",
  ),
  
  
);

@$max_file_size = 5000000*1024; //max file upload size (bytes)
?>