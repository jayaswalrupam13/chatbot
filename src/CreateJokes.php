<?php

namespace Jayaswalrupam13\Chatbot;

class CreateJokes{

    public function jokes(){

        $curl = curl_init();

        // Set the URL and other necessary options
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://v2.jokeapi.dev/joke/Any?blacklistFlags=nsfw,religious,political,racist,sexist,explicit&type=single",
            CURLOPT_RETURNTRANSFER => true, // Return the response as a string
            CURLOPT_FOLLOWLOCATION => true, // Follow redirects if any
            CURLOPT_TIMEOUT => 10, // Timeout after 10 seconds
        ]);

        // Execute cURL request and store the response
        $response = curl_exec($curl);

        // Check if there was an error during the request
        if(curl_errno($curl)) {
            echo "cURL Error: " . curl_error($curl);
        } else {
            // Parse the JSON response
            $data = json_decode($response, true);

            // Check if the response contains a joke
            if(isset($data['joke'])) {
                $return = "Here's a joke: " . $data['joke'];
            } else {
                $return = "No joke found!";
            }
        }

        // Close the cURL session
        curl_close($curl);

        return $return;

    }
}

//$obj = new CreateJokes();
//echo $obj->jokes();