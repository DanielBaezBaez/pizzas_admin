<?php
$dalTablefailed_jobs = array();
$dalTablefailed_jobs["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTablefailed_jobs["uuid"] = array("type"=>200,"varname"=>"uuid", "name" => "uuid");
$dalTablefailed_jobs["connection"] = array("type"=>201,"varname"=>"connection", "name" => "connection");
$dalTablefailed_jobs["queue"] = array("type"=>201,"varname"=>"queue", "name" => "queue");
$dalTablefailed_jobs["payload"] = array("type"=>201,"varname"=>"payload", "name" => "payload");
$dalTablefailed_jobs["exception"] = array("type"=>201,"varname"=>"fldexception", "name" => "exception");
$dalTablefailed_jobs["failed_at"] = array("type"=>135,"varname"=>"failed_at", "name" => "failed_at");
	$dalTablefailed_jobs["id"]["key"]=true;

$dal_info["pizzas_at_localhost__failed_jobs"] = &$dalTablefailed_jobs;
?>