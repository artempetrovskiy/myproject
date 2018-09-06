<?php
$employees = [
    [
        'name' => 'Clark Kent',
        'age' => 22,
        'skills' => ['PHP', 'Java', 'C#']
    ],
    [
        'name' => 'Steve Stifler',
        'age' => 21,
        'skills' => ['С++', 'JS', 'CSS', 'HTML']
    ],
    [
        'name' => 'Bruce Wayne',
        'age' => 35,
        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
    ],
    [
        'name' => 'Peter Parker',
        'age' => 18,
        'skills' => ['PHP Unit', 'C', 'Pascal']
    ]
];


foreach ($employees as $employer){
    foreach ($employer as $keyProp => $prop){
        if (is_array($prop)){

            var_dump(array_search('PHP Unit', $prop));
            var_dump(array_search('PHP', $prop));

            if (((array_search('PHP Unit', $prop)) && (array_search('PHP', $prop))) === false){
                continue;
            }
            if (((array_search('PHP Unit', $prop)) && (array_search('PHP', $prop))) === true){
                echo "Есть оба навыка";
                break;
            }
            if (((array_search('PHP Unit', $prop)) && (array_search('PHP', $prop))) === false){
                echo "Есть хотя бы один";
            }
        }
    }
}




