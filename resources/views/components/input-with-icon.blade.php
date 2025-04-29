@props(['name', 'value' => '', 'icon' => 'user', 'label' => ''])

<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <div class="flex items-center border border-green-500 rounded-lg px-3 py-2 bg-white">
        <x-icon :name="$icon" class="text-green-500 w-5 h-5 mr-2" />
        <input type="text" name="{{ $name }}" value="{{ $value }}"
               class="w-full focus:outline-none text-gray-800" />
    </div>
</div>
