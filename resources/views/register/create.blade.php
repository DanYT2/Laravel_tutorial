<x-layout>
  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
      <h1 class="text-center font-bold text-xl">Register!</h1>
      <form method="POST" action="/register" class="mt-10">
        @csrf
        <div class="mb-6">
          <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Username
          </label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required value="{{ old('username') }}">
          <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Name
          </label>
          <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" required value="{{ old('name') }}">
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
          <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Email
          </label>
          <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required value="{{ old('email') }}">
          <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
            Password
          </label>
          <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>
        </div>

        <div class="mb-6">
          <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Submit
          </button>
        </div>
      </form>
    </main>
  </section>
</x-layout>