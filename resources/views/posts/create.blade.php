<x-layout>
    <x-slot name="title">
        投稿作成
    </x-slot>
   <div>
        @if ($quizResult === "1")
            正解！！！
        @else
            不正解！！！
        @endif
   </div>
    <div class="my-5">
        <div><span>図鑑No.{{ $choicedPokemon->pokedex_number }}</span>{{ $choicedPokemon->name }}</div>
        <div>{{ $choicedPokemon->description }}</div>
    </div>
    <form method="post" action="{{ route('posts.store') }}" value="{{ $choicedPokemon->name }}">
        @csrf
        <div>
            <label>
                本文
                <textarea type="text" name="body">{{ old('body') }}</textarea>
            </label>
            @error('body')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <input type="hidden" name="choiced-pokemon-id" value="{{ $choicedPokemon->id }}">
        <input type="hidden" name="quizResult" value="{{ $quizResult }}">
        <div>
            <button>送信</button>
        </div>
    </form>
</x-layout>
