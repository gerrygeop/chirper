<x-app-layout>
   <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
      <x-chirps.form :isEdit="true" :chirp="$chirp" />
   </div>
</x-app-layout>
