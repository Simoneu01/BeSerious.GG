<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::firstOrCreate([
            'title' => 'Rainbow Six, Be Serious: finalmente si comincia',
        ], [
            'body' => "Si parte con il Be Serious, una sorta di campionato di Serie B per il competitive di Rainbow Six. L'obiettivo di 6ixProject e Piazza",
            'img' => 'https://www.esportsmag.it/wp-content/uploads/2021/03/Be-Serious.png',
            'author' => 'Massimiliano Dipasquale',
            'author_link' => 'https://www.esportsmag.it/author/massimiliano-di-pasquale/',
            'author_img' => 'https://secure.gravatar.com/avatar/bc2e17b00a428aaf28d443fbfcf671cd?s=96&r=g',
            'url' => 'https://www.esportsmag.it/rainbow-six-be-serious-finalmente-si-comincia/',
            'created_at' => '2021-04-19 01:00:00'
        ]);

        Article::firstOrCreate([
            'title' => 'Nasce il Rainbow Six BeSerious, la “Serie B” italiana dello sparatutto di Ubisoft',
        ], [
            'body' => " Bene, Piazza Esport e 6ixProject hanno preso in mano la situazione e creato una lega che, ci auguriamo, fungerà da incubatore di talenti per il",
            'img' => 'https://www.uagna.it/wp-content/uploads/2021/04/EzG6_YCWQAERZ04.jpg',
            'author' => 'Mark',
            'author_link' => 'https://www.uagna.it/author/mark',
            'author_img' => 'https://secure.gravatar.com/avatar/59322bd6b3af0d1b728ef24f63fcf015',
            'url' => 'https://www.uagna.it/videogiochi/nasce-il-rainbow-six-beserious-la-serie-b-italiana-dello-sparatutto-di-ubisoft-149217',
            'created_at' => '2021-04-19 00:00:00'
        ]);

        Article::firstOrCreate([
            'title' => 'Rainbow Six, nasce una nuova lega minore: ecco il Be Serious',
        ], [
            'body' => "Organizzato da 6ixProject e Piazza Esport, il campionato Be Serious si presenta. Prende vita l'idea di lanciare una lega minore all'interno del panorama competitivo",
            'img' => 'https://www.esportsmag.it/wp-content/uploads/2021/03/Be-Serious.png',
            'author' => 'Massimiliano Dipasquale',
            'author_link' => 'https://www.esportsmag.it/author/massimiliano-di-pasquale/',
            'author_img' => 'https://secure.gravatar.com/avatar/bc2e17b00a428aaf28d443fbfcf671cd?s=96&r=g',
            'url' => 'https://www.esportsmag.it/rainbow-six-nasce-una-nuova-lega-minore-ecco-il-be-serious/',
            'created_at' => '2021-04-17 00:00:00'
        ]);
    }
}
