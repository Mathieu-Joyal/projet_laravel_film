<x-layout>

    <x-header/>

    <main>

        <div class="interface">

            <section>

                @foreach ($films as $film)

                    <x-article_film :film='$film' />

                @endforeach
            </section>
        </div>
    </main>

    <x-footer/>
    
</x-layout>