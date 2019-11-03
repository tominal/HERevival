<?php

namespace App\Http\Controllers;

use App\Npc;
use Illuminate\Http\Request;

class BrowserController extends Controller {
    public function index() {
        if (!session('browser_session')) {
            session(['browser_session' => '1.2.3.4']);
        }

        // dont throw 404 for entire page if game-ip doesnt exist
        if (!$npc = Npc::whereIpAddress(session('browser_session'))->first()) {
            // something like this
            return view('pages.browser.index', ['webserver' => 'IP does not exist.']);
        }

        $webserver = $npc->webserver;
        $webserver = str_replace('%id%', $npc->id, $webserver);

        return view('pages.browser.index', ['webserver' => $webserver]);
    }

    public function login()
    {
        return view('pages.browser.login');
    }

    public function hack()
    {
        return view('pages.browser.hack');
    }

    public function setIp(Request $request) {
        // double check that the input is actually an ip
        $input = $request->validate([
            'ip' => 'required|ip'
        ]);
        session(['browser_session' => $input['ip']]);
        return redirect()->route('get.browser.index');
    }

    public function server($ip) {
        if (!$npc = Npc::whereIpAddress($ip)->first()) {
            abort(404);
        }

        return view('pages.browser.index');
    }
}
