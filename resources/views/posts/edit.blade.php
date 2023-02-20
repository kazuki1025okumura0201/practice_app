<x-layout>
    <x-slot name="title">
        投稿編集
    </x-slot>
    <div>
        <span>{{ $post->quiz_correct }} 問正解しました！</span>
    </div>
    <div class="my-5">
        @foreach ($post->pokemons as $postHavePokemon)
            <div><span>図鑑No.{{ $postHavePokemon->pokedex_number }}</span>{{ $postHavePokemon->name }}</div>
            <div>{{ $postHavePokemon->description }}</div>
        @endforeach
    </div>
    <form method="post" action="{{ route('posts.update', $post)}}">
        @method('PATCH')
        @csrf
        <div>
            <label>
                本文
                <textarea type="text" name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            @error('body')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button>更新</button>
        </div>
    </form>
</x-layout>
