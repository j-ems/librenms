<?php

if (starts_with($sysObjectId, '.1.3.6.1.4.1.311.1.1.3')) {
    $os = 'windows';
}

if (str_contains($sysDescr, array('Windows'))) {
    $os = 'windows';
}
