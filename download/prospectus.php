<?php
header('Content-disposition: attachment; filename=prospectus.pdf');
header('Content-type: application/pdf');
readfile('prospectus.pdf');
?>