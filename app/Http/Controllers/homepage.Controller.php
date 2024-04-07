<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class homepageController extends Controller
{
        public function index()
        {
        return view('homepage.top');
        }
}
?>