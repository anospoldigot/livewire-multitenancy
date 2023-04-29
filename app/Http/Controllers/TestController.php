<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index ()
    {
        
        $tenant = Tenant::create([
            'plan' => 'free',
        ]);

        $tenant->domains()->create([
            'domain' => 'acme',
        ]);

        return 'success';
    }
}
