<?php

namespace App\Http\Controllers;

use App\Models\Commit;

class CommitController extends Controller
{
    public function __invoke()
    {
        return Commit::inRandomOrder()->first()->message;
    }
}
