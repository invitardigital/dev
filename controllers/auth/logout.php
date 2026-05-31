<?php

\Illuminate\Support\Facades\Auth::logout();
request()->session()->invalidate();
request()->session()->regenerateToken();

redirect('/login')->send();
exit;

$datos = [];