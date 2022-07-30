@extends('layout.main')

@section('title', '3E')

@section('content')
 <section class="sec-modal">
        <div class="container">
            <div class="modal-content" id="modal-content" >
                <div class="modal">
                    <img class="modal-imglogo" src="/assets/3e-logo-registro.png" alt="">
                    <h3>Faça sua homenagem aqui</h3>
                    <form class="modal-form" action="">
                    <div class="field field_v1" id="modalContent">
                        <label for="first-name" class="ha-screen-reader"></label>
                        <textarea cols="50" rows="100" id="first-name" class="field__input" placeholder="Digite sua Homenagem"></textarea>
                        <span class="field__label-wrap" aria-hidden="true">
                        <span class="field__label"></span>  
                    </form>
                </div>
                <button type="submit" class="button-modal" id="close">Cancelar</button>
                <input type="file" id="selectedFile" style="display: none;" />
                <input type="button" class="button-modal" value="Adicionar Arquivo" onclick="document.getElementById('selectedFile').click();" />                       
                <button type="submit" class="button-modal">Enviar</button>

            </div>
        </div>
 </section>

 <section class="sec-acess">
    <div class="container">
        <img src="/assets/img-slideshow.png" alt="">
        <div class="acess-content">
        <h3>Gostaria de criar uma homenagem?<br> Click aqui!!!</h3>     
        <button type="submit" class="acess-btn" id="open">Homenagear</button>
        <h3>Gostaria de ver uma homenagem?<br> Insira seu link de acesso aqui!!!</h3>    
        <div class="form">
            <input type="url" name="text" autocomplete="off" required />
            <label for="text" class="label-name">
                <span class="content-name">URL</span>
            </label>
        </div>
        <button type="submit" class="acess-btn" id="open">Enviar</button>
            
        </div>
    </div>
</section>
@endsection