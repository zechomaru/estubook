<?php 

function setActive($path)
{
    return Request::is($path) ? ' active' :  '';
}

function setActiveEcommerceCategory($path)
{
    return Request::is($path . '*') ? ' active' :  '';
}
