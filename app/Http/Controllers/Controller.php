<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getObjects()
    {
        $url = 'https://download.pdfforge.org/mirror-status/releases/pdfcreator-professional';
        $json = file_get_contents($url);
        return json_decode($json);
    }
}
