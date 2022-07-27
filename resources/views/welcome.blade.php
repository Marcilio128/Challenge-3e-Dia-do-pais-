@extends('layout.main')

@section('title', '3E')

@section('content')
<section class="sec-initial">
    <div class="container">
        <div class="text-initial">
            <h1>Bem vindo ao dia dos pais na 3e engenharia</h1>
            <p>O dia dos pais é o dia de homenagearmos aquele que é nosso grande exemplo,
                que está conosco em todas as horas, que nunca nos deixou faltar amor, carinho 
                e que sempre nós compreendeu, venha homenagear seu grande herói!!! 
            </p>
        </div>
        <lottie-player class="animation-initial" src="https://assets4.lottiefiles.com/packages/lf20_9e8yoqkm.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>   
     </div>
</section>

<h1 class="title-meet">Conheça esses grandes pais</h1>

<section class="sec-meet">
    <div classe="container">
       <div class="meet-content"> 
        <div class="meet-turing">
            <img class="meet-imgs" src="/assets/alan-turing.jpg" alt="">
            <h3>Alan Turing</h3>
            <p>Turing foi altamente influente no desenvolvimento da ciência moderna e   da computação teórica, 
                proporcionando uma formalização dos conceitos de algoritmo e computação com a máquina de Turing, 
                que pode ser considerada um modelo de um computador de uso geral.
                 Ele é amplamente considerado o pai da ciência da computação teórica e da inteligência artificial.</p>
        </div>

        <div class="meet-pitagoras">
            <img class="meet-imgs" src="/assets/pitagoras.webp" alt="">
            <h3>Pitagoras</h3>
            <p>Considerado por muitos o pai da matematica Pitagoras foi um filósofo e matemático 
                grego jônico creditado como fundador do movimento chamado Pitagorismo</p>
        </div>
        
        <div class="meet-newton">
            <img class="meet-imgs" src="/assets/isaac-newton.jpg" alt="">
            <h3>Isacc Newton</h3>
            <p> Considerado por muitos o pai da fisica, Newton foi um matemático, físico, 
            astrônomo, teólogo e autor inglês (descrito em seus dias como um "filósofo natural") que é amplamente reconhecido 
                 como um dos cientistas mais influentes de todos os tempos e como uma figura-chave na Revolução Científica. </p>
        </div>

    </div></div>
</section>
@endsection