<?php

  // use getlights.php to find out the IDs for your light bulbs! :3

  $settings = [ "lights" => [ "1" => [ "nickname" => "Ceiling",
                                       "mode" => "sun",
                                       "colour_mode" => "temp",
                                       //"day" => ["r"=>255, "g"=> 0, "b" => 240],
                                       //"night" => ["r"=>0, "g"=> 255, "b" =>12],
                                       "day" => 165,
                                       "night" => 468,
                                       "minutes" => 25, // minutes before sunset to begin fade
                                       "sunrise_before" => 100], // minutes to move sunrise earlier, use to force day mode

                              "2" => [ "nickname" => "tv",
                                       "mode" => "sun",
                                       "colour_mode" => "rgb",
                                       "day" => ["r"=>123, "g"=> 142, "b" => 145],
                                       "night" => ["r"=>242, "g"=> 104, "b" =>78],
                                       "minutes" => 25,
                                       "sunrise_before" => 100],

                              "3" => [ "nickname" => "bloom",
                                       "mode" => "sun",
                                       "colour_mode" => "rgb",
                                       "day" => ["r"=>255, "g"=> 208, "b" => 197],
                                       "night" => ["r"=>255, "g"=> 187, "b" =>167],
                                       "minutes" => 25,
                                       "sunrise_before" => 100,
                                       "night_link"=>["light"=>1]]
                            ],
                "timezone" => "Europe/London",
                "long" => 50.614429,
                "lat" => -2.457621,
                "zenneth" => 90.583333,
                "transition" => 50 // transition time, multiples of 100ms - 50
              ]

?>
