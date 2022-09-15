@props(['label', 'for'])

<div class="w-full mb-6">
  <label for="{{ $for }}" class="text-slate-600">
    {{ $label }}
  </label>

  <input
    name="{{ $for }}"
    id="{{ $for }}"
    {{ $attributes->merge(['type' => 'text']) }}
    value="{{ old($for) }}"
    class="text-slate-500 focus:text-slate-800 w-full mt-2 border border-slate-200 hover:border-slate-300 duration-300 px-2.5 outline-sky-500 focus:bg-white py-1.5 rounded-md"
  />

  @error($for)
      <p>{{ $message }}</p>
  @enderror
</div>