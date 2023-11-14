<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('imagem') }}
        </h2>

        <img class="w-40 h-40 rounded-full" src="{{ "storage/$user->image" }}" alt="user avatar"/>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Utualize sua imagemmmmm.") }}
        </p>
    </header>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form method="post" action="{{ route('profile.image') }}" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div>
            <x-input-label for="image" :value="__('Foto de Perfil')" />
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image', $user->image)" required autofocus autocomplete="image" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
