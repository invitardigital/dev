<?php

if (env('APP_MAINTENANCE', false)) {
    abort(503, 'Sitio en mantenimiento');
}