<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/47e99b8cefa287ed/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $sunriseh = $parsed_json->{'sun_phase'}->{'sunrise'}->{'hour'};
  $sunrisem = $parsed_json->{'sun_phase'}->{'sunrise'}->{'minute'};
  $sunseth = $parsed_json->{'sun_phase'}->{'sunset'}->{'hour'};
  $sunsetm = $parsed_json->{'sun_phase'}->{'sunset'}->{'minute'};
  echo "Feature astronomy : <br>";
  echo "Di Wilayah Sydney Australia, matahari terbit pada pukul ${sunriseh}:${sunrisem}";
  echo ", dan terbenam pada pukul ${sunseth}:${sunsetm}";
  ?>
  <br><br>
  <?php
  $json_string2 = file_get_contents("http://api.wunderground.com/api/47e99b8cefa287ed/conditions/q/CA/San_Francisco.json");
  $parsed_json2 = json_decode($json_string2);
  $wilayah = $parsed_json2->{'current_observation'}->{'observation_location'}->{'full'};
  $negara = $parsed_json2->{'current_observation'}->{'observation_location'}->{'country'};
  $suhuC = $parsed_json2->{'current_observation'}->{'temp_c'};
  $cuaca = $parsed_json2->{'current_observation'}->{'weather'};
  echo "Feature conditions :<br>";
  echo "In the ${wilayah} ${negara}, temperature is ${suhuC} Celcius.<br>";
  echo "Weather is ${cuaca}";
  ?>
  <br><br>
   <?php
  $json_string3 = file_get_contents("http://api.wunderground.com/api/47e99b8cefa287ed/tide/q/CA/San_Francisco.json");
  $parsed_json3 = json_decode($json_string3);
  $daerah = $parsed_json3->{'tide'}->tideInfo[0]->{'tideSite'};
  $loc = $parsed_json3->{'tide'}->tideSummary[2]->{'date'}->{'pretty'};
  $code = $parsed_json3->{'tide'}->tideSummary[2]->{'date'}->{'epoch'};
  $height_t = $parsed_json3->{'tide'}->tideSummary[2]->{'data'}->{'height'};
  $type_t = $parsed_json3->{'tide'}->tideSummary[2]->{'data'}->{'type'};
  echo "Feature tide :<br>";
  echo "In the ${daerah} at ${loc} code ${code}<br>";
  echo "the tide height is ${height_t}, and this type ${type_t}";
  ?>