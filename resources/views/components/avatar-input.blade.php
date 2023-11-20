@props(['disabled' => false])

<div class="relative inline-block cursor-pointer text-center">
<label for="avatar" class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
    {{ $slot }}
</label>
<input type="file" id="avatar" name="image" {{ $disabled ? 'disabled' : '' }}
        onchange="this.form.submit()"
        class="absolute left-0 top-0 w-0 h-0 opacity-0 cursor-pointer {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 rounded-md shadow-sm']) }}">
</div>