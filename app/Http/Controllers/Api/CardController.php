<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index() {
        $data = [
            [
                'title' => 'Lorem ipsum',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima laudantium illo quidem dignissimos iste? Modi aliquam, at neque assumenda libero quibusdam, pariatur quasi cum quaerat explicabo odio voluptate ipsam.',
                'img' => 'https://via.placeholder.com/150'
            ]
        ];
        return response()
            ->json($data);
    }
}
