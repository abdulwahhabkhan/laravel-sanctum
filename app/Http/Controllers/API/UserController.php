<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private $cache_key="users:";
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $users = Cache::get('user_list');
        if(!$users){
            $users = User::all();
            Cache::add($this->cache_key."list", $users);
        }
        return response()->json($users, Response::HTTP_OK);
    }
}
