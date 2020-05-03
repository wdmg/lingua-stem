<?php
    return [
        'uk' => [
            'vowel' => '/аеіоуиєюяї/',
            'perfectiveground' => '/((ів|івши|івшись|ив|ивши|ившись)|((?<=[ая])(в|вши|вшись)))$/',
            'reflexive' => '/(с[яь])$/',
            'adjective' => '/(ее|іе|ие|ое|ими|іми|ої|а|е|і|у|ю|ій|ий|ой|ем|ім|им|ом|его|ого|ему|ому|іх|их|ую|юю|ая|яя|ою|ею)$/',
            'participle' => '/((івш|ивш|уюч|ьн|л)|((?<=[ая])(ем|нн|вш|ющ|щ)))$/',
            'verb' => '/((іла|ила|ена|ейте|уйте|іть|іли|или|ей|уй|іл|ил|ім|им|ен|іло|ило|ено|ять|ує|ують|іт|ит|ени|іть|ить|ую|ю)|((?<=[ая])(ла|на|ете|йте|ли|й|л|ем|н|ло|но|ет|ют|ны|ть|ешь|нно)))$/',
            'noun' => '/(а|ев|ов|іе|ье|е|іями|ями|ами|еї|ії|и|ією|ею|єю|ой|ий|й|иям|ям|ием|ем|ам|ом|о|у|ах|іях|ях|и|і|ь|ію|ью|ю|ия|ья|я)$/',
            'rvre' => '/^(.*?[аеіоуиєюяї])(.*)$/',
            'derivational' => '/[^аеіоуиєюяї][аеіоуиєюяї]+[^аеіоуиєюяї]+[аеіоуиєюяї].*(?<=і)сть?$/',
            'alphabet' => '/[^АБВГДЕ`ЖЗІЇЙКЛМНОПРСТУФХЦЧШЩ\'ИЄЬЕЮЯабвгдежзіїйклмнопрстуфхцчшщиєьеюя\x{2010}-]/u',
        ]
    ];
?>