<header>

    <h1>La base de données sur le cinéma</h1>

    <nav>

        <form action="{{ route('films.chercher') }}" method="GET">
            <input type="text" placeholder="rechercher" name="texte">
            <input class="soumettre" type="submit" value="🔍">
        </form>
    </nav>
</header>