@if (Auth::user()->is_favoriting($micropost->id))
        {{-- Unfavoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-success btn-sm normal-case" 
                onclick="return confirm('id = {{ $micropost->id }} のfavoriteを外します。よろしいですか？')">Unfavorite</button>
        </form>
@else
        {{-- favoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}" class="inline-block">
            @csrf
            <button type="submit" class="btn btn-neutral btn-sm normal-case">favorite</button>
        </form>
@endif
