<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * Geocoder class
 * 
 *
 */

 class Geocoder {

  var $CI;
  private $mapquest_key;

  function __construct() {
   if(!isset($this->CI)) {
    $this->CI =& get_instance();
   }
   $this->mapquest_key = $this->CI->config->item('AIzaSyAaXtFjL-GmaVRwPxk2BXBDWJbsAeBgLt8');
  }

  function geocode($address) {
   
   if($this->mapquest_key == '') { return FALSE; }
   if($address == '') { return FALSE; }

   $request_url = 'http://www.mapquestapi.com/geocoding/v1/address?key='.$this->mapquest_key.'&inFormat=kvp&location=' . urlencode($address);
   $response = $this->makerequest($request_url);
   if(empty($response->results[0]->locations)) {
    return FALSE;
   } else {
    $location_details = $response->results[0]->locations[0];
    return array(
     'address' => $location_details->street,
     'city' => $location_details->adminArea5,
     'state' => $location_details->adminArea3,
     'zip_code' => $location_details->postalCode,
     'county' => $location_details->adminArea4,
     'country' => $location_details->adminArea1,
     'lat' => $location_details->displayLatLng->lat,
     'lng' => $location_details->displayLatLng->lng
    );
   }
  }

  function reverse_geocode($lat, $lng) {

   if($this->mapquest_key == '') { return FALSE; }
   if($lat == '') { return FALSE; }
   if($lng == '') { return FALSE; }

   $latlng = $lat . ',' . $lng;
   $request_url = 'http://www.mapquestapi.com/geocoding/v1/reverse?key='.$this->mapquest_key.'&location=' . $latlng;
   $response = $this->makerequest($request_url);
   if(empty($response->results[0]->locations)) {
    return FALSE;
   } else {
    $location_details = $response->results[0]->locations[0];
    return array(
     'address' => $location_details->street,
     'city' => $location_details->adminArea5,
     'state' => $location_details->adminArea3,
     'zip_code' => $location_details->postalCode,
     'county' => $location_details->adminArea4,
     'country' => $location_details->adminArea1,
     'lat' => $location_details->displayLatLng->lat,
     'lng' => $location_details->displayLatLng->lng
    );
   }
  }

  function makerequest($url) {
   $session = curl_init($url);
   curl_setopt($session, CURLOPT_FOLLOWLOCATION, TRUE);
   curl_setopt($session, CURLOPT_RETURNTRANSFER, TRUE);
   $response = curl_exec($session);
   curl_close($session);
   return json_decode($response);
  }

 }

?>