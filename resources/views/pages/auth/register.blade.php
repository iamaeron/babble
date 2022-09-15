@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-5 pb-40">
  <a href="/" class="block w-max">
    <img src="/babble.svg" class="w-7" />
  </a>
  <h1 class="text-4xl font-medium mt-12 mb-8 text-slate-800">Sign up</h1>
  <form method="POST" action="/register">
    @csrf

    <div class="flex items-center space-x-10">
      <x-form.field for="firstname" label="First Name" />
      <x-form.field for="lastname" label="Last Name" />
    </div>

    <x-form.field for="username" label="Username" />
    <x-form.field for="email" label="Email Address" />

    <div class="flex items-center space-x-10">
      <x-form.field type="password" for="password" label="Password" />
      <x-form.field type="password" for="password_confirmation" label="Confirm" />
    </div>

    <button
      class="hover:bg-indigo-600 duration-150 bg-indigo-500 text-white rounded-md px-4 w-full py-3 font-medium"
    >
      Create Account
    </button>

    <button
      class="mt-3 hover:bg-indigo-50 duration-150 text-indigo-500 rounded-md px-4 w-full py-3 font-medium"
    >
      Sign in instead
    </button>
  </form>
</div>

<x-footer />
@endsection