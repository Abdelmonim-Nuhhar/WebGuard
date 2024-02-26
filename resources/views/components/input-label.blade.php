@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-mono font-bold text-4xl text-red-400 dark:text-red-300']) }}>
    {{ $value ?? $slot }}
</label>
