<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ChangelogController extends Controller
{
    public function display_changelog() {

        $objects = $this->getObjects();

        $changelog = [];

        foreach ($objects[0]->changes as $change) {
            if(!array_key_exists($change->type, $changelog)) {
                $changelog[$change->type] = [];
            }

            array_push($changelog[$change->type], $change->text);
        }

        return view('changelog', [
            'changelog' => $changelog,
        ]);
    }
}
