<x-layout>
    <x-slot name="title">
        投稿一覧
    </x-slot>
    <div class="items-center mt-m">
        <a href="{{ route('posts.quiz') }}" class="btn start-quiz-link">クイズを開始</a>
    </div>
    <div class="mx-index">
        <h2 class="mt-l">投稿一覧</h2>
        <div class="my-5">
            @foreach ($posts as $post)
                <div class="my-5 border">
                    <h3>{{ "$post->quiz_correct" }}問正解しました！</h3>
                    @foreach ($post->pokemons as $post_has_pokemon)
                        <div class="ml-10 flex">
                            <div class="">
                                <div class="flex">
                                    <h4>No.{{ $post_has_pokemon->pokedex_number }}</h4>
                                    <h4>{{ $post_has_pokemon->name }}</h4>
                                </div>
                                <img src="{{ asset($post_has_pokemon->image) }}" class="index-image-size">
                            </div>
                            <div class="index-post">
                                <h4>メッセージ</h4>
                                {{ $post->body }}
                            </div>
                        </div>
                    @endforeach
                    <div class="show-link">
                        <a href="{{ route('posts.show', ['post' => $post]) }}">詳細を見る</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
