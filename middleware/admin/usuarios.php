<?php

if (auth()->user()->rol !== 'superadmin') {
    abort(403, 'Solo el superadmin puede gestionar usuarios');
}