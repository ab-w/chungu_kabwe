@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-gray-800 border border-gray-300 textfocus:border-orange-500 focus:ring-orange-500 rounded-md shadow-sm bg-transparent px-4 py-3']) !!}>
