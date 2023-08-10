@props(['film'])

<a href="{{ route('films.show', ["id" => $film->id]) }}">

    <article style="background-image: url('{{$film->poster_arriere_plan}}')">

        <h2> {{ $film->titre }}</h2>

        <div class="article_infos">
            
            <p>date de sortie: {{ $film->date_sortie }} </p>
            <p> {{ $film->vote_moyen }} ⭐</p>
            <p># vote: {{ $film->votes }} </p>
        </div>
    </article>
</a>