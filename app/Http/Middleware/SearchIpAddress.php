<?php

namespace App\Http\Middleware;

use App\Http\Requests\IpAddressRequest;
use App\Models\Host;
use Closure;
use Illuminate\Http\Request;

class SearchIpAddress {
  /**
   * @param IpAddressRequest $request
   * @param Closure $next
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
   */
  public function handle(IpAddressRequest $request, Closure $next) {
    $name = $request->name;
    $host = Host::query()->where('name', $name)->firstOrFail()->load('ipAddress');
    if ($host)
      return redirect(view('pages.search-form', ['host' => $host]));

    return $next($request, $host);
  }
}
