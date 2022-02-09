<?php

namespace App\Http\Controllers;

use App\Events\SearchProcessedEvent;
use App\Http\Requests\IpAddressRequest;
use App\Models\Host;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class IpAddressController extends Controller {

  /**
   * @param IpAddressRequest $request
   * @return View
   */
  public function searchIpAddress(IpAddressRequest $request): View {
    $host = Host::query()->where('name', $request->name)->firstOrFail()->load('ipAddress');
    $ipAddress = $host->ipAddress->address;
    $user = Auth::user();
    event(new SearchProcessedEvent($ipAddress, $user));

    return view('pages.search-form');
  }
}