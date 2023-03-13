@extends('layouts.web')
@section('title', 'Via Cep')
@section('container')
    <div class="column" style="margin-top: 5%">
        <form method="POST" action="" class="ui form" id="form-search-cep">
            <div class="two fields">
                <div class="field">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" id="cep" required>
                </div>
                <div class="field">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" id="rua">
                </div>
            </div>
            <div class="three fields">
                <div class="field">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro">
                </div>
                <div class="field">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">
                </div>
                <div class="field">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado">
                </div>
            </div>
            <div class="field">
                <button type="button" class="ui grey button" id="btn-search-cep">Buscar</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
    @vite('resources/js/viacep/app.js')
@endsection
