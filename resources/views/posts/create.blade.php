<x-layout>
    <x-slot name="title">
        投稿作成
    </x-slot>
   <h1 class="items-center mt-l">
        @if ($quizResult === "1")
            <span class="blue">正解！！！</span>
        @else
            <span class="red">不正解！！！</span>
        @endif
   </h1>
    <div class="my-5 mt-m">
        <h4 class="items-center"><span>No.{{ $choicedPokemon->pokedex_number }}</span>{{ $choicedPokemon->name }}</h4>
        <div class="items-center"><img src="{{ asset($choicedPokemon->image) }}" class="image-size"></div>
        <h4 class="m-10">{{ $choicedPokemon->description }}</h4>
    </div>
    <div>
        <div class="items-center">
            <form method="post" action="{{ route('posts.store') }}" value="{{ $choicedPokemon->name }}">
                @csrf
                <div>
                    <label>
                        本文
                        <textarea type="text" name="body" class="text-box">{{ old('body') }}</textarea>
                    </label>
                    @error('body')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="choiced-pokemon-id" value="{{ $choicedPokemon->id }}">
                <input type="hidden" name="quizResult" value="{{ $quizResult }}">
                <div class="items-center">
                    <button class="submit-btn mt-s">送信</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
