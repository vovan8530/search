<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HostController extends Controller {

  /**
   * @return View
   */
  public function index(): View {
    $user = Auth::user();
    $hosts = $user->hosts()->get();

    return view('pages.hosts', ['hosts' => $hosts]);
  }

  /**
   * @return View
   */
  public function searchForm(): View {
    return view('pages.search-form');
  }
}
