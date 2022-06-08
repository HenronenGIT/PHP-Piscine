#!/usr/bin/php
<?php
function panic()
{
	exit("Wrong Format\n");
}

function convert_day_month($array)
{
	$days = array(	"lundi" => "Monday",
					"mardi" => "Tuesday",
					"mercredi" => "Wednesday",
					"jeudi" => "Thursday",
					"vendredi" => "Friday",
					"samedi" => "Saturday",
					"dimanche" => "Sunday");
					
	$months = array("janvier" => "January",
					"février" => "February",
					"mars" =>"March",
					"avril" =>"April",
					"mai" =>"May",
					"juin" =>"June",
					"juillet" =>"July",
					"août" =>"August",
					"septembre" =>"September",
					"octobre" =>"October",
					"novembre" =>"November",
					"décembre" =>"December");
	print(strtotime($days[$array[0]] . $array[1] . $months[$array[2]] . $array[3] . $array[4], date_default_timezone_set("Europe/Paris")) . "\n");
}

function is_valid_input($str)
{
	$pattern = '/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([1-9]|0[0-9]|[12][0-9]|3[0]) ([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre) (1[9][7-9][0-9]|[2-9][0-9][0-9][0-9]) (0[0-9]|1[0-9]|2[0-3]):(0[0-9]|[1-5][0-9]):(0[0-9]|[1-5][0-9])$/';
	if (!preg_match($pattern, $str))
		return (0);
	return (1);
}

if ($argc == 2)
{
	if (!is_valid_input($argv[1]))
		panic();
	$info_array = explode(" ", strtolower($argv[1]));
	convert_day_month($info_array);
}
?>