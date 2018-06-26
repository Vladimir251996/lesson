<?php
require_once 'lib.php';
?>

<html>
<head>
  <title>Проект Виннипух и компания</title>
<link href="stuel.css" rel="stylesheet" type="text/css" />  
  
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<center>
 <table border="1" cellpadding="0" cellspacing="0" width="980">
 <tr valign="top">
      <td valign="top" width="980">
      <img src="/shapka.png" border="0" width="980" height="150" />
      </td>
   </tr>

   <tr valign="top">
      <td valign="top"  width="980">
          
        
          <div id="vmenu">
             <ul>
             
    
    <li><a href="index.php" target="_self"><img src="/menu1.png" width="150" height="30" border="0" /></a></li>
	<li><a href="index.php?id=1" target="_self"><img src="/menu2.png" width="150" height="30" border="0" /></a></li>
	<li><a href="index.php?id=2" target="_self"><img src="/menu3.png" width="150" height="30" border="0" /></a></li>
	<li><a href="index.php?id=3" target="_self"><img src="/menu4.png" width="150" height="30" border="0" /></a></li>               
             </ul>
          </div>
     </td>
   </tr>
   <tr valign="top">
     <td valign="top" width="980">
       <table border="0"  width="980" id="tab_centr">
         <tr valign="top">
          <td valign="top" width="200" align="center">
          left
          <script type="text/javascript" src="//vk.com/js/api/openapi.js?154"></script>

<!-- VK Widget -->
<div id="vk_playlist_131838271_72459814"></div>
<script type="text/javascript">
VK.Widgets.Playlist('vk_playlist_131838271_72459814', 131838271, 72459814, '482058838b25a4c648', {width: 200});
</script>
          </td>
          <td valign="top" width="580">
               <div id="sheet">
               <div id="sheet1"></div>
               <div id="sheet2"> 
               <?php 
               $id_menu = getIdMenu();
               if ($id_menu==1)
               { 
                
               	makeOpisan();
               }
               else if ($id_menu==2)
               {
               getHTML(8);
               getHTML(9);
               makeTabl();
               getHTML(10);
               }
               else if ($id_menu==3)
               {
                getHTML(7);
               }
               else if ($id_menu==0)
               {
                getHTML(6);
               }
               ?>
                </div>
                <div id="sheet3"></div>
                </div>
          </td>
          <td valign="top" width="200" align="center">
          right
          </td>
          </tr>
      </table>
      </td>
   </tr>
     <tr valign="top">
     <td valign="top" width="980">
        <img src="/podval.png" width="980" height="50" border="0" />

      </td>
   </tr>
</table>
</center>
</body>
</html>









