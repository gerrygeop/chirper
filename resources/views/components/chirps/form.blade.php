@props(['isEdit' => false, 'chirp' => null])

<form action="{{ $isEdit ? route('chirps.update', $chirp) : route('chirps.store') }}" method="POST">
   @csrf
   @if ($isEdit)
      @method('patch')
   @endif

   <textarea name="message" id="message"
      class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
      placeholder="{{ __('What\'s on your mind?') }}">{{ $isEdit ? old('message', $chirp->message) : old('message') }}</textarea>
   <x-input-error :messages="$errors->get('message')" class="mt-2" />
   <x-primary-button class="mt-4">{{ __('Kicau') }}</x-primary-button>
</form>
