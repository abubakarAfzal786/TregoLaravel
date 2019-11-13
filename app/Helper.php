<?php

function jsoon_data($json_data)
{
return json_decode($json_data);
}
function contracts()
{
    return \DB::table('contracts')->where('active',1)->get();
}
function temprature()
{
    return \DB::table('temperaturesConstraints')->where('active',1)->get();
}
function cdc()
{
    return \DB::table('cdcs')->groupBy('description')->where('active',1)->get();
}


