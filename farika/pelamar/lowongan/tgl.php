<?php
$tgl = date("Y-m-d");
$tgl2 = date("y-m-d", strtotime("+20 days", strtotime($tgl)));
$tglb = date("d/m/Y", strtotime($tgl2));

echo "$tgl === $tglb";
