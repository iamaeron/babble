@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-5 pb-40">
  <a href="/" class="block w-max">
    <img src="/babble.svg" class="w-7" />
  </a>
  <h1 class="text-4xl font-medium mt-12 mb-8 text-slate-800">Sign in</h1>
  <form method="POST" action="{{ route('login') }}">
    @csrf

    <x-form.field for="login" label="Email or Username" />
    <x-form.field type="password" for="password" label="Password" />

    <div class="flex mb-8 items-center">
      <input type="checkbox" name="remember" id="remember_me" class="hidden peer" />
      <label for="remember_me" class="cursor-pointer mr-3 border w-4 h-4 flex text-transparent peer-checked:text-white duration-75 items-center justify-center border-slate-300 rounded peer-checked:border-transparent peer-checked:bg-sky-500 peer-checked:shadow-lg shadow-red-500">
        <x-heroicon-m-check class="w-3.5 h-3.5 delay-75 duration-150" />
      </label>
      <label for="remember_me" class="cursor-pointer text-sm text-slate-600 select-none">Remember me</label>
    </div>

    <button
      class="hover:bg-indigo-600 duration-150 bg-indigo-500 text-white rounded-md px-4 w-full py-3 font-medium"
    >
      Log in
    </button>
  </form>

  <a href="/register">
    <button class="block mt-3 hover:bg-indigo-50 duration-150 text-indigo-500 rounded-md px-4 w-full py-3 font-medium">
      Create an account
    </button>
  </a>
</div>

<x-footer />
@endsection