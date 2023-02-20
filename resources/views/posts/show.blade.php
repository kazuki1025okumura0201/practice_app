<x-layout>
    <x-slot name="title">
        投稿詳細
    </x-slot>
    <div>
        <span>{{ $post->quiz_correct }} 問正解しました！</span>
        投稿日時{{ date("Y年n月j日",strtotime($post->created_at)) }}
    </div>
    <div>
        <div>メッセージ</div>
        {{ $post->body }}
    </div>
    @foreach ($post->pokemons as $post_has_pokemon)
        <div>
            <span>No.{{ $post_has_pokemon->pokedex_number }}</span>
            {{ $post_has_pokemon->name }}
        </div>
        <div>
            {{-- <img src="{{ asset($post_has_pokemon->image) }}"> --}}
            写真
        </div>
        <div>
            {{ $post_has_pokemon->description }}
        </div>
    @endforeach
    <a href="{{ route('posts.edit', ['post' => $post]) }}">編集</a>
    <form method="post" action="{{ route('posts.destroy', $post) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn">削除</button>
    </form>

</x-layout>
