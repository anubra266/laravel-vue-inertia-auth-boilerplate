<x-layout>
    <section class="bg-gray-100">
        <div class="container px-0 py-20 mx-auto sm:px-4">
            <a href="/" title="PMS Login" class="flex items-center justify-start sm:justify-center">
                <x-logo></x-logo>
                <span class="sr-only">PMS</span>
            </a>
            <div
                class="w-full px-4 pt-5 pb-6 mx-auto mt-8 mb-6 bg-white rounded-none shadow-xl sm:rounded-lg sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-4/12 sm:px-6">
                <h1 class="mb-4 text-lg font-semibold text-left text-gray-900">
                    Log in to your account
                </h1>
                @if (session('status'))
                <div class="space-y-2">
                    <div class="alert bg-primary-light text-primary" role="alert"> {{ session('status') }}</div>
                </div>
                @endif

                @if ($errors->any())
                <div class="space-y-2">
                    <div class="alert text-red-700 bg-red-100" role="alert"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                        </svg> <span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </span></div>
                </div>
                @endif
                <form class="mb-8 space-y-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <label class="block">
                        <span class="block mb-1 text-xs font-medium text-gray-700">Your Email</span>
                        <input class="form-input" type="email" name="email" value="{{ old('email') }}"
                            placeholder="Ex. james@bond.com" inputmode="email" required autofocus />
                    </label>
                    <label class="block">
                        <span class="block mb-1 text-xs font-medium text-gray-700">Your Password</span>
                        <input class="form-input" type="password" name="password" required
                            autocomplete="current-password" placeholder="••••••••" required />
                    </label>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox" name="remember" />
                            <span class="block ml-2 text-xs font-medium text-gray-700 cursor-pointer">Remember me</span>
                        </label>
                    </div>
                    <input type="submit" class="w-full py-3 mt-1 btn btn-primary" value="Login" />
                </form>
                <div class="space-y-8">
                    <div class="text-center border-b border-gray-200" style="line-height: 0px">
                        <span class="p-2 text-xs font-semibold tracking-wide text-gray-600 uppercase bg-white"
                            style="line-height: 0px">Or</span>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <a href="#" class="py-3 btn btn-icon btn-google">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="mr-1">
                                <path
                                    d="M20.283,10.356h-8.327v3.451h4.792c-0.446,2.193-2.313,3.453-4.792,3.453c-2.923,0-5.279-2.356-5.279-5.28	c0-2.923,2.356-5.279,5.279-5.279c1.259,0,2.397,0.447,3.29,1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233	c-4.954,0-8.934,3.979-8.934,8.934c0,4.955,3.979,8.934,8.934,8.934c4.467,0,8.529-3.249,8.529-8.934	C20.485,11.453,20.404,10.884,20.283,10.356z" />
                            </svg>
                            <span class="sr-only">Continue with</span> Google
                        </a>
                    </div>
                </div>
            </div>
            <p class="mb-4 text-xs text-center text-gray-400">
                <a href="#" class="text-purple-200 underline hover:text-white">Create an account</a>
                ·
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-purple-200 underline hover:text-white">Forgot
                    password</a>
                @endif
                ·
                <a href="#" class="text-purple-200 underline hover:text-white">Privacy & Terms</a>
            </p>
        </div>
    </section>
</x-layout>
