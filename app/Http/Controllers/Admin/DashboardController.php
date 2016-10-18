<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use App\Models\User;
use App\Models\Academy;

class DashboardController extends Controller
{

    public function index()
    {
      $bookCount = Book::count();
      $authorCount = Author::count();
      $userCount = User::count();
      $academyCount = Academy::count();
      return view('admin.dashboard')->with('data' , [ 'book' => $bookCount, 'author' => $authorCount, 'user' => $userCount, 'academy' => $academyCount]);
    }



}