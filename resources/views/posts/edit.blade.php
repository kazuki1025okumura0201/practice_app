<x-layout>
    <x-slot name="title">
        投稿編集
    </x-slot>
    <h1 class="mt-m edit-color border items-center mx-index">投稿編集</h1>
    <h2 class="items-center mt-m">
        <span>{{ $post->quiz_correct }} 問正解しました！</span>
    </h2>
    <div class="my-5 mt-m">
        @foreach ($post->pokemons as $postHavePokemon)
            <h4 class="items-center"><span>図鑑No.{{ $postHavePokemon->pokedex_number }}</span>{{ $postHavePokemon->name }}</h4>
            <div class="items-center"><img src="{{ asset($postHavePokemon->image) }}" class="image-size"></div>
            <div class="items-center mx-m border-show">{{ $postHavePokemon->description }}</div>
        @endforeach
    </div>
    <div class="items-center">
        <form method="post" action="{{ route('posts.update', $post)}}">
            @method('PATCH')
            @csrf
            <div class="mt-m">
                <b>投稿メッセージを編集できます</b>
                <div>
                    <label>
                        <textarea type="text" name="body" class="text-box">{{ old('body', $post->body) }}</textarea>
                    </label>
                </div>
                @error('body')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="items-center">
                <button class="submit-btn mt-s">更新</button>
            </div>
        </form>
    </div>
</x-layout>
