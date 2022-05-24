<?php

namespace App\Http\Controllers;

class LandingpageController extends Controller
{
    public function landingpage() {

        $objects = $this->getObjects();

        $version = [
            'version' => $objects[0]->version,
            'releaseDate' => $objects[0]->releaseDate,
            'downloads' => $objects[0]->downloads,
        ];

        return view('landingpage', [
            'version' => $version
        ]);
    }
}
