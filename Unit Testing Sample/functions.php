<?php
require_once ('TwitterOAuth.php');
require_once ('config.php');
class Functions
{


    function search()
    {
        $toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN,
            ACCESS_TOKEN_SECRET);

        // $query = array(
        // "q" => "sad",
        // "count" => 10,
        // "geocode" => "55.864237,-4.251805999999988,8km",
        // "result_type" => "recent", );

        $response = $toa->get('search/tweets', $query);
        $array = json_decode(json_encode($response), true);

        return $array;
    }

    function GetOneCity()
    {

        $class = new Functions();
        $query = array(
            "q" => "project",
            "count" => 100,
            "geocode" => "51.5073346,-0.12768310000001293,8km",
            "result_type" => "recent",
            );
        $results = functions::search($query);


        $Array = array();


        foreach ($results->statuses as $result) {


            $date = substr($result->created_at, 0, 3);


            if ($date == "Thu") {
                array_push($Array, $username);
                $username = $result->user->screen_name;
            }
        }


        $ArrayR = array_unique($Array);


        $count = count($ArrayR);


        $Returnarray[0] = array();
        $Returnarray[0] = $count;
        return $Returnarray[0];

    }

    function BetterGetOneCity()
    {
        $class = new Functions();
        $query = array(
            "q" => "love",
            "count" => 100,
            "geocode" => "51.5073346,-0.12768310000001293,8km",
            "result_type" => "recent",
            );
        $results = functions::search($query);


        $Array = array();


        foreach ($results->statuses as $result) {

            $date = substr($result->created_at, 0, 3);


            if ($date == "Sun") {
                array_push($Array, $username);
                $username = $result->user->screen_name;
            }
        }

        $Array = count(array_unique($Array));

        $Returnarray[0] = array();
        $Returnarray[0] = $Array;
        return $Returnarray[0];

    }


    function DayOfTheWeek()
    {
        $t = time();
        return (date("D", $t));
    }

    function GetFourCities($query)
    {
        $array1 = GetOneCity($query, "55.864237,-4.251805999999988,8km", DayOfTheWeek());
        $array2 = GetOneCity($query, "51.5073346,-0.12768310000001293,10km",
            DayOfTheWeek());
        $array3 = GetOneCity($query, "56.462018,-2.970721000000026,4km", DayOfTheWeek());
        $array4 = GetOneCity($query, "57.149717,-2.094278000000031,5km", DayOfTheWeek());

        $result = array_merge($array1, $array2, $array3, $array4);
        arsort($result);
        return $result;

    }

    function GetTheCityName($geocode)
    {
        if ($geocode == "51.5073346, -0.12768310000001293,8km") {
            return "London";
        } elseif ($geocode == "55.864237,-4.251805999999988,8km") {
            return "Glasgow";
        } elseif ($geocode == "56.462018,-2.970721000000026,4km") {
            return "Dundee";
        } elseif ($geocode == "57.149717,-2.094278000000031,5km") {
            return "Abberden";
        } else {
            return "error";
        }

    }

    function GetFourTweets($key, $gecode)
    {
        $Array = array();
        $query = array(
            "q" => $key,
            "count" => 4,
            "geocode" => $gecode,
            "result_type" => "recent",
            );

        $number = 1;
        $results = search($query);

        foreach ($results->statuses as $result) {
            $date = $result->created_at;
            $username = $result->user->screen_name;
            $text = $result->text;

            $Returnarray[0] = array();
            $Returnarray[$number++]['Username'] = $username;
            $Returnarray[$number++]['Text'] = $text;
            $Returnarray[$number++]['Date'] = $date;

        }
        return $Returnarray;
    }
}


$class = new Functions();

$result = functions::GetOneCity();
print_r($result);

?>