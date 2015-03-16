<?php

function delete_form($routeParams, $label = 'Delete'){
    $form = Form::open([
        'method' => 'DELETE',
        'route' => $routeParams,
        'class' => 'form-inline'
    ]);

    $form .= Form::submit($label, ['class'=>'btn btn-danger btn-xs']);

    return $form .= Form::close();

}