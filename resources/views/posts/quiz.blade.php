<x-layout>
    <x-slot name="title">
        クイズ
    </x-slot>
    <div>
        {{ $correctPokemon->description }}
    </div>
    @php
        // 正誤判定を初期化
        $count = 0;
    @endphp
    @foreach ($choicesOfQuiz as $choice)
        @if ($choice->id === $correctPokemon->id)
            @php
                $count++;
            @endphp
        @endif
        <div>
            {{-- 選んだポケモンのデータと正誤判定をcreateアクションに渡す --}}
            <a href="{{ route('posts.create', ['choicedPokemonId' => $correctPokemon, 'quizResult' => "$count"]) }}">
                {{ $choice->name }}
            </a>
        </div>
        @if ($count === 1)
            @php
                $count--;
            @endphp
        @endif
    @endforeach
</x-layout>
