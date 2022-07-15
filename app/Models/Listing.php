<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Hoje acordei e tomei cafe'
            ],

            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Hoje acordei e tomei leite'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}