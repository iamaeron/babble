@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-5 pb-40 h-screen">
  <a href="/" class="block w-max">
    <img src="/babble.svg" class="w-7" />
  </a>
  <h1 class="text-4xl font-medium mt-12 mb-8 text-slate-800">Verify email</h1>
  <h2 class="text-slate-600">
    You're almost there! One last thing, can you please verify your email
    address by clicking on the link we just sent to you? If you didn't receive
    the email, we will gladly send you another.
  </h2>

  
  <form method="POST" action="{{ route('verification.send') }}" class="mt-14">
    @if(session('status') == 'verification-link-sent')
      <p class="mb-4 text-sm text-sky-600">
        We've just sent you another email verification link
      </p>
    @endif
    @csrf
    <button
      class="bg-slate-800 duration-150 hover:bg-slate-700 rounded-lg px-4 py-3 font-medium text-white"
    >
      Resend verification link
    </button>
  </form>
</div>

<x-footer />
@endsection