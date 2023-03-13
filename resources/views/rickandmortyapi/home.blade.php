@extends('layouts.web')
@section('title', 'Rick and Morty')
@section('container')
    <div class="column" style="margin-top: 5%">
        <form class="ui form" action="" method="get" id="form-rick-morty">
            <div class="field">
                <label for="personagens">personagens</label>
                <select class="ui dropdown" name="personagens" id="personagens">
                    <option value="1">Rick Sanchez </option>
                    <option value="2">Morty Smith </option>
                    <option value="3">Summer Smith </option>
                    <option value="4">Beth Smith </option>
                    <option value="5">Jerry Smith </option>
                    <option value="6">Abadango Cluster Princess </option>
                    <option value="7">Abradolf Lincler </option>
                    <option value="8">Adjudicator Rick </option>
                    <option value="9">Agency Director </option>
                    <option value="10">Alan Rails </option>
                    <option value="11">Albert Einstein </option>
                    <option value="12">Alexander </option>
                    <option value="13">Alien Googah </option>
                    <option value="14">Alien Morty </option>
                    <option value="15">Alien Rick </option>
                    <option value="16">Amish Cyborg </option>
                    <option value="17">Annie </option>
                    <option value="18">Antenna Morty </option>
                    <option value="19">Antenna Rick </option>
                    <option value="20">Ants in my Eyes Johnson </option>
                </select>
            </div>
            <div class="field">
                <label for="localizacoes">localizações</label>
                <input type="text" name="localizacoes" id="localizacoes" required placeholder=" ">
            </div>
            <div class="field">
                <label for="episodios">episodios</label>
                <input type="text" name="episodios" id="episodios" required placeholder=" ">
            </div>
            <div class="field">
                <button class="ui teal button" type="button" id="btn-search">Buscar</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
    @vite('resources/js/rickandmortyapi/app.js')
@endsection
