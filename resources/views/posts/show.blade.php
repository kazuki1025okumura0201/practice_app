<x-layout>
    <x-slot name="title">
        投稿詳細
    </x-slot>
    <h2 class="items-center mt-l">
        <span>{{ $post->quiz_correct }} 問正解しました！</span>
        <span class="ml-5">投稿日時{{ date("Y年n月j日",strtotime($post->created_at)) }}</span>
    </h2>
    <div class="items-center">
        <b>メッセージ</b>
    </div>
    <div class="items-center">
        <div>{{ $post->body }}</div>
    </div>
    <div class="mt-l">
        @foreach ($post->pokemons as $post_has_pokemon)
        <div class="items-center">
            <b>
                <span>No.{{ $post_has_pokemon->pokedex_number }}</span>
                {{ $post_has_pokemon->name }}
            </b>
        </div>
        <div class="items-center mb-10">
            <div>
                <img src="{{ asset($post_has_pokemon->image) }}" class="image-size">
            </div>
        </div>
        <div class="mx-m border-show p-10">
            {{ $post_has_pokemon->description }}
        </div>
        @endforeach
    </div>
    <div class="align-right flex-end mr-l">
        <a href="{{ route('posts.edit', ['post' => $post]) }}" class="edit-btn">編集</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" class="ml-5">
            @method('DELETE')
            @csrf
            <button type="submit" class="delete-btn">削除</button>
        </form>
    </div>
</x-layout>
