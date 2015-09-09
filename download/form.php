<?php
header('Content-disposition: attachment; filename=form.pdf');
header('Content-type: application/pdf');
readfile('form.pdf');
?>