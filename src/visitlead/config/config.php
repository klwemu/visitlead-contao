<?php

if(!empty($GLOBALS["TL_CONFIG"]["visitlead_id"]))
   {
   $GLOBALS['TL_BODY'][] = '<script type="text/javascript"> var cid = "'.$GLOBALS["TL_CONFIG"]["visitlead_id"].'"; </script>';
   $GLOBALS['TL_BODY'][] = '<script async type="text/javascript" src="//app.visitlead.com/va/vl.min.js"></script>';
   }