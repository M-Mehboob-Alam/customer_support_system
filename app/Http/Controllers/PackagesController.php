<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use Auth;
class PackagesController extends Controller
{
   public function subscribePackage($id)
   {
    $user_id = Auth::user()->id;
    $package = Packages::findOrFail($id);


      return view('user.payment', compact('package', 'user_id'));
   }
}
