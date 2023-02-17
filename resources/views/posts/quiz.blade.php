<x-layout>
    <x-slot name="title">
        クイズ
    </x-slot>
    @foreach ($choices as $choice)
        <div>
            {{-- 選んだポケモンのデータをcreateアクションに渡す --}}
            <a href="{{ route('posts.create', $choice) }}">
                {{ $choice->name }}
            </a>
        </div>
    @endforeach
</x-layout>
