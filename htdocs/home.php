<?php session_start(); ?> 
<html>
  <head> 
    <script type="text/javascript" src="http://o.aolcdn.com/aim/web-aim/aimapi.js"></script> 
  </head>
  <body> 
    <table width="100%">
      <tr>
        <td valign="top"> User: <?php echo( $_SESSION['user'] ); ?></td>
        <td valign="top"> 
          <div id="AIMBuddyListContainer" wim_key="** Your WIM key **"></div> 
          <a onclick="AIM.widgets.buddyList.launch();return false;" href="nojavascript.html">Launch my Buddy List</a></td>
      </tr>
    </table> 
   </body>
</html>