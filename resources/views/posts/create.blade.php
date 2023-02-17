<x-layout>
    <x-slot name="title">
        投稿作成
    </x-slot>
    <div>〇〇問正解しました！</div>
    <div class="my-5">
        <div><span>図鑑No.{{ $choice->pokedex_number }}</span>{{ $choice->name }}</div>
        <div>{{ $choice->description }}</div>
    </div>
    <form method="post" action="{{ route('posts.store') }}" value="{{ $choice->name }}">
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
        <input type="hidden" name="pokemon-id" value="{{ $choice->id }}">
        <div>
            <button>送信</button>
        </div>
    </form>
</x-layout>
