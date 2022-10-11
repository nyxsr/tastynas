<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(request $request)
    {
        $checkbox = $request->checkbox;
        $encodedNama = rawurlencode(',Saya ' . $request->nama . ' 😊🙏');
        if ($checkbox != null) {
            $url = "https://wa.me/6281394064004?text=Hallo%20Tastynas%20Subang%20😊🙏";
        } else {
            $url = "https://wa.me/6281394064004?text=Hallo%20Tastynas%20Subang%20" . $encodedNama;
        }
        return redirect()->away($url);
    }
}
