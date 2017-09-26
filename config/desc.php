<?php
function desc ($desc_orig){
  return substr(preg_replace("/&?[a-z0-9]+;/i", "",strip_tags($desc_orig)), 0, 160);
}
?>