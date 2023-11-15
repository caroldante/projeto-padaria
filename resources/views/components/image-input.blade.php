@props(['disabled' => false, 'name' => 'image'])

<div style="position: relative; overflow: hidden; display: inline-block; cursor: pointer; text-align: center;">
    <label for="{{ $name }}" style="cursor: pointer;">
        <x-primary-button class="mt-4">{{ __('Importar Nova Foto') }}</x-primary-button>
        <!-- <span style="background: #E5E7EB; color: #1F2937; padding: 10px 20px; margin-top: 8px; display: inline-block;">Importar Nova Foto</span> -->
    </label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" {{ $disabled ? 'disabled' : '' }}
        onchange="this.form.submit()"
        style="font-size: 100px; position: absolute; left: 0; top: 0; opacity: 0; cursor: pointer;"
        {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 rounded-md shadow-sm']) !!}>
</div>
