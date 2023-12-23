 <?php

//   dispatch view

 function url($url = ''){
    return APP_URL . trim($url, '/');
 }

 function asset($path = '')
{
    return APP_URL . trim($path, '/');
}