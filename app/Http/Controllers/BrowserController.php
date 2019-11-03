<?php

namespace App\Http\Controllers;

use App\Npc;

class BrowserController extends Controller {
    public function index() {
        if (!session('browser_session')) {
            session(['browser_session' => '1.2.3.4']);
        }

        $npc = Npc::whereIpAddress(session('browser_session'));

        if (!$npc->exists()) {
            abort(404);
        }

        $npc = $npc->first();

        $webserver = $npc->webserver;
        $webserver = str_replace('%id%', $npc->id, $webserver);

        return view('pages.browser.index', ['webserver' => $webserver]);
    }

    public function server($ip) {
        $npc = Npc::whereIpAddress($ip);

        if (!$npc->exists()) {
            abort(404);
        }

        $npc = $npc->first();

        return view('pages.browser.index');
    }
}
