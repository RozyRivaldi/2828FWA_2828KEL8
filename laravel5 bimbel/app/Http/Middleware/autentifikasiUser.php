<?php 
namespace App\Http\Middleware;

use Closure;

class autentifikasiUser()
{
	private $auth;

	public function handle($request, Closure $next)
	{
		if($this->auth->check())
		{
			return $next($request);
		}
		return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');
	}
}

