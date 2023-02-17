<x-layout>
    <x-slot name="title">
        投稿一覧
    </x-slot>
    <div>
        <a href="{{ route('posts.quiz') }}">クイズを開始</a>
    </div>
    <h2>投稿一覧</h2>
    <div class="my-5">
        @foreach ($posts as $post)
            <div class="my-5">
                <span>{{ "$post->quiz_correct" }}問正解しました！</span>
                @foreach ($post->pokemons as $post_has_pokemon)
                    <div>
                        <span>No.{{ $post_has_pokemon->pokedex_number }}</span>
                        {{ $post_has_pokemon->name }}
                    </div>
                @endforeach
                <div>{{ $post->body }}</div>
            </div>
        @endforeach
    </div>
</x-layout>
