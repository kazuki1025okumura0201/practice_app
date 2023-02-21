<x-layout>
    <x-slot name="title">
        クイズ
    </x-slot>
    <h4 class="m-10">
        {{ str_replace($correctPokemon->name, ' 〇〇 ', $correctPokemon->description) }}
    </h4>
    @php
        // 正誤判定を初期化
        $count = 0;
    @endphp
    <div class="quiz-content mx-l line-height">
        @foreach ($choicesOfQuiz as $choice)
        @if ($choice->id === $correctPokemon->id)
        @php
                $count++;
                @endphp
        @endif
        <div class="quiz-object">
            {{-- 選んだポケモンのデータと正誤判定をcreateアクションに渡す --}}
            <a href="{{ route('posts.create', ['choicedPokemonId' => $correctPokemon, 'quizResult' => "$count"]) }}">
                <div><img src="{{ asset($choice->image) }}" class="image-size"></div>
                <div class="name-color">{{ $choice->name }}</div>
            </a>
        </div>
        @if ($count === 1)
        @php
                $count--;
                @endphp
        @endif
        @endforeach
    </div>
</x-layout>
