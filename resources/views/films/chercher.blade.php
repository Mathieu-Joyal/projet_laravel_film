<x-layout>

    <x-header/>

    <main>
        <div class="retour_accueil">
            <a href="{{ route('index')}}">Accueil</a>
        </div>

        @if ($chercher->isEmpty())
           <p class="empty"><strong>Aucune sélection trouvé.</strong></p>
        @endif

        <div class="interface">

            <section>

                @foreach ($chercher as $film)

                    <x-article_film :film='$film' />

                @endforeach
            </section>
        </div>
    </main>

    <x-footer/>
    
</x-layout>