<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include_once('class/classuser.php');


  $user=new User();

  function GetImageExtension($imagetype)
  {
        if(empty($imagetype)) return false;
        switch($imagetype)
      {
          case 'image/bmp': return '.bmp';
          case 'image/gif': return '.gif';
          case 'image/jpeg': return '.jpg';
          case 'image/png': return '.png';
          default: return false;
      }
    }
   if (!empty($_FILES["upath"]["name"]))
   {
       $file_name=$_FILES["upath"]["name"];
       $temp_name=$_FILES["upath"]["tmp_name"];
       $imgtype=$_FILES["upath"]["type"];
       $ext= GetImageExtension($imgtype);
       $imagename=date("d-m-Y")."-".time().$ext;
       $target_upath = "gallery/profile/".$imagename;
   if(move_uploaded_file($temp_name, $target_upath))
    {
        $user->userReg($uname,$fname,$lname,$uemail,$ucontact,$upword,$uaddress,$target_upath);
    }
    else
      {
          exit("Error While uploading image on the server");
       }
     }
}


?>
