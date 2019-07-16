<?php
/**
 *  isLocalhost
 *  returns boolean true if function is ran on a localhost and false if otherwise
 */

function isLocalhost() {
  $servername = $_SERVER['SERVER_NAME'];
  $servernameExplode = explode(".", $servername);
  $servernameShift = $servernameExplode[0];
  if ( strtolower($servername) != "localhost" && ( $servernameShift != "192" && $servernameShift != "172" && $servernameShift != "127") ) {
    return false;
  } else {
    return true;
  }
}

/// end
