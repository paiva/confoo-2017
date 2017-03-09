<?php

  $datacenters = ['Ashburn', 'Atlanta', 'Chicago', 'Dallas',
                  'Hayward', 'Jacksonville', 'Los Angeles', 'Miami',
                  'New York', 'Newark', 'Palo Alto', 'San Jose',
                  'Seattle', 'South Bend', 'St. Louis', 'Montreal',
                  'Toronto', 'Rio de Janeiro', 'Sao Paulo', 'Amsterdam',
                  'Dublin', 'London', 'Madrid', 'Marseille', 'Milan',
                  'Paris', 'Stockholm', 'Warsaw', 'Chennai', 'Hong Kong',
                  'Manila', 'Melbourne', 'Mumbai', 'New Delhi',
                  'Osaka', 'Seoul', 'Singapore', 'Sydney', 'Taipei', 'Tokyo'];

    $array['cols'][] = array('label'=> 'City', 'type' => 'string');
    $array['cols'][] = array('label'=> 'Up', 'type' => 'number');
    $array['cols'][] = array('label'=> 'Down', 'type' => 'number');

    foreach ($datacenters as $city)
    {

      $array['rows'][] = array('c' => array( array('v' => $city),
                                           array('v' => rand(0,20)),
                                           array('v' => rand(0,10))));
    }

    $fp = fopen('data.json', 'w');
    fwrite($fp, json_encode($array));
    fclose($fp);

    $string = file_get_contents("data.json");
    echo $string;

?>
