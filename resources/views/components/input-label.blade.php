@props(['value'])
<!-- text color for fields input -->
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-green-800']) }}>
    {{ $value ?? $slot }}
</label>
