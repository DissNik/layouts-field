<x-moonshine::collapse class="_layouts-block">
    <x-slot name="title">
        {!! $heading !!}
    </x-slot>

    <x-slot name="button">{!! $button !!}</x-slot>

    {!! $fields !!}
</x-moonshine::collapse>
