#!/usr/bin/php
<?php
function panic()
{
	exit("Wrong Format\n");
}

function convert_day_month($string)
{
	// Check for bigger and lower case
	$days = array(	"lundi" => "Monday",
					"mardi" => "Tuesday",
					"mercredi" => "Wednesday",
					"jeudi" => "Thursday",
					"vendredi" => "Friday",
					"samedi" => "Saturday",
					"dimanche" => "Sunday");
	$months = array('January',
					'February',
					'March',
					'April',
					'May',
					'June',
					'July ',
					'August',
					'September',
					'October',
					'November',
					'December');
	print_r($days);
	// $format = "l-d-m-Y H:i:s";
	// // $date = DateTime::createFromFormat($format, $string);
	// $date = date_create_from_format($string, $format);
	// print(date_format($date, "l-d-m-y H:i:s"));
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
	$str = convert_day_month($argv[1]);
	
	// print(strtotime("tuesday 12 November 2013 12:02:21", date_default_timezone_set("Europe/Stockholm")) . "\n");
	// print(strtotime("November tuesday 12 2013 12:02:21", date_default_timezone_set("Europe/Stockholm")) . "\n");
}
// time zone
//(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)
//(0[0-9]|1[0-9]|2[0-3]):(0[0-9]|1[0-9]|2[0-):(0[0-9])
?>