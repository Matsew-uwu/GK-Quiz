<?php 

$questions_total = 0;
$question_correct = 0;
$score_max = 0;
$score = 0;

$questions = [
    array(
        "name" => "name",
        "answer" => "42",
        "score" => 1
    ),
    array(
        "name" => "pays",
        "answer" => "coree-du-sud",
        "score" => 1
    ),
    array(
        "name" => "radio",
        "answer" => "22",
        "score" => 1
    ),
    array(
        "name" => "arrondissement",
        "answer" => "20",
        "score" => 1
    ),
    array(
        "name" => "google-queries",
        "answer" => range(40, 65),
        "score" => 3
    ),
    array(
        "name" => "wifi",
        "answer" => "wireless fidelity",
        "score" => 1
    ),
    array(
        "name" => "www",
        "answer" => "Tim Berners-Lee",
        "score" => 2
    )
];

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    foreach ($_GET as $g){
        foreach ($questions as $q){
            if ($g['name'] == $q['name']){
                if (lowercase(trim($g['content'])) == $q['answer']){
                    echo "great job !";
                }
            }
            else {
                echo "haha t nul caca";
            }
        }
    }
}


function checkAnswer() {
    
}

$questions=[
    array(
        "name" => "question1",
        "type" => "text",
        "text" => "Avant tout connais-tu la réponse à la vie",
        "answer" => "42",
        "score" => 1
    ),
    array(
        "name" => "cheval",
        "type" => "radio",
        "text" => "Quelle est la couleur du cheval blanc d'henri IV ?",
        "choices" => [
            array(
                "text" => "Bleu",
                "value" => "bleu"),
            array(
                "text" => "Vert",
                "value" => "vert"),
            array(
                "text" => "Blanc",
                "value" => "blanc")
            ],
        "answer" => "blanc",
        "score" => 2
    )
        ];





?>







<!--
    isset() retourne une erreur si non definie ou null
    empty() ne retourne pas d'erreur si inexistant

    --
    trim()

-->    