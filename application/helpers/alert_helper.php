<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
alert-success
alert-info
alert-warning
alert-danger
*/
function alert($msg, $class, $fechar) {
    $alert = '';
    (isset($fechar))?$alert .='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>':'';
     $alert .= '<div class="alert '.$class.'">'.$msg.'</div>';
     return $alert;
}

/*
panel-primary
panel-success
panel-info
panel-warning
panel-danger
*/
function alertTitle($titulo, $msg, $class) {
    $alert = '';
    $alert .= '<div class="panel '.$class.'">';
    $alert .= '<div class="panel-heading">';
    $alert .= '<h3 class="panel-title">'.$titulo.'</h3>';
    $alert .= '</div>';
    $alert .= '<div class="panel-body">';
    $alert .= $msg;
    $alert .= '</div>';
    $alert .= '</div>';
    return $alert;
}

function table($titulo, $obj) {
    
}