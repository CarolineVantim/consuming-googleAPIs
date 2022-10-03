<?php

namespace App\text;

use Google\Cloud\Translate\V2\TranslateClient;

class Translate{

    private static function getClient(){

        return new TranslateClient([
            'key' => 'AIzaSyB0dn2yl_MbNj2cdVuJ2iD2FEvntmIr-v4'
        ]);
    }


    public static function run($input, $targetLanguages = []){

        $obClient = self::getClient();

        $response = [];

        foreach ($targetLanguages as $language) {
            $result = $obClient->translate($input, [
                'target' => $language
            ]);

            $response[$language] = $result['text'] ?? '';
        }
        
        return $response;
    }
}