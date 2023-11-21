<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Imagem de Perfil') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Atualize sua imagem de perfil.") }}
        </p>

        <img class="my-4 w-40 h-40 rounded-full" src="{{ "storage/$user->image" }}" alt="user avatar"/>
        
    </header>
    

    <form id="profileImageForm" method="post" action="{{ route('profile.image') }}" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div>
                <x-avatar-input required>
                    {{ __('Importar Nova Foto') }}
                </x-avatar-input>

           
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>
        <!--
        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
        </div>
        -->
    </form>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
</section>
