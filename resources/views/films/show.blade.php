<x-layout>

    <x-header/>

    <main>

        <div class="retour_accueil">
            <a href="{{ route('index')}}">Accueil</a>
        </div>

        <h2 class="titre_un_film">{{ strtoupper($film->titre) }}</h2>

        <div class="interface">
            <section class="un_film">
                <img src="{{$film->poster_arriere_plan}}" alt="{{ $film->titre }}" style="max-width: 750px">
                <div class="info_un_film">
                    <div>
                        <p>{{ $film->synopsis }}</p>
                    </div>
                    <div>
                        <p>date de sortie: {{ $film->date_sortie }} </p>
                        <p> {{ $film->vote_moyen }} ⭐</p>
                        <p># vote: {{ $film->votes }} </p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <x-footer/>

</x-layout>
