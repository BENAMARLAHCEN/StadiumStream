 <?php

//   dispatch view

 function view($view, $data = [])
 {
     extract($data);
 
     require "../app/view/layouts/main.php";
 }


 function adminView($view, $data = [])
 {
     extract($data);
 
     require "../app/view/layouts/dashboard.php";
 }