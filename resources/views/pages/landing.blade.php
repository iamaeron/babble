@extends('layouts.app')

@section('content')
<div class="min-h-screen h-auto flex flex-col justify-between">
	<div>
		<header class="py-6">
			<div class="max-w-6xl mx-auto flex items-center justify-between">
				<div class="flex items-center space-x-10">
					<img src="/babble.svg" class="w-7" />
					<nav class="space-x-10 text-slate-600">
						<a href="#">Github</a>
						<a href="#">Support</a>
						<a href="#">Updates</a>
					</nav>
				</div>
				<div class="flex items-center">
					<button
						class="mr-2 text-sky-500 hover:bg-sky-50 px-3.5 py-2.5 font-medium rounded-md"
					>
						Log in
					</button>
					<a href="/register">
						<button
							class="bg-sky-500 text-white px-3.5 py-2.5 font-medium rounded-md"
						>
							Sign up
						</button>
					</a>
				</div>
			</div>
		</header>

		<div class="max-w-6xl mx-auto pt-16 pb-20 flex justify-between">
			<div>
				<h1
					class="font-['Be_Vietnam_Pro'] bg-gradient-to-b from-sky-400 to-indigo-500 bg-clip-text text-transparent text-6xl leading-tight tracking-tighter font-medium"
				>
					Connect with your <br />
					loved ones, privately.
				</h1>
				<h2 class="leading-snug text-slate-600 max-w-[40ch] mt-8 mb-10">
					Babble is a free, open-source, and modern messaging application that
					focuses on privacy of its users.
				</h2>

				<div>
					<div class="flex items-center space-x-2">
						<a href="/register">
							<button
								class="bg-indigo-500 text-white rounded-md px-5 py-4 font-medium"
							>
								Get started
							</button>
						</a>
						<button
							class="text-indigo-500 rounded-md px-5 py-4 font-medium hover:bg-indigo-50"
						>
							Already have an account?
						</button>
					</div>

					<button
						class="hover:bg-sky-100 flex mt-10 bg-sky-50 text-sky-700 py-2 text-sm px-3 rounded-full w-max space-x-3"
					>
						<p>
							Help us by donating, reporting a bug, or contributing to this
							project
						</p>
						<i class="ai-chevron-right text-sm"></i>
					</button>
				</div>
			</div>

			<div>
				<img src="/hero-image.svg" alt="" class="h-96" />
			</div>
		</div>
	</div>

	<div>
		<div class="py-32">
			<div class="text-center text-slate-600 max-w-6xl mx-auto">
				<p>Babble is a project made by</p>
				<div class="my-4 text-2xl text-slate-900">John Aeron Sencil</div>
				<div class="flex items-center space-x-8 justify-center">
					<div
						class="flex items-center text-cyan-600 space-x-2 justify-center"
					>
						<i class="ai-twitter-fill"></i>
						<a
							href="https://twitter.com/iamaeronnn"
							target="_blank"
							rel="noreferrer noopener"
							>iamaeronnn</a
						>
					</div>
					<div
						class="flex items-center text-slate-600 space-x-2 justify-center"
					>
						<i class="ai-github-fill"></i>
						<a
							href="https://github.com/iamaeron"
							target="_blank"
							rel="noreferrer noopener"
							>iamaeron</a
						>
					</div>
				</div>
			</div>
		</div>

		<x-footer />
	</div>
</div>
@endsection
