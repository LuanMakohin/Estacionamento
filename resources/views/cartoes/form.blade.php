@csrf
<div>
    <h1 style="text-align: center; margin-top: 50px">Gerenciamento de cartão</h1>
    <div class="row justify-content-center">
        <div class="col-md-2 ">
            <label class="form-label" for="id_cartao">Código do cartão</label>
            <input type="text" name="id_cartao" id="id_cartao" value="{{$cartao->id_cartao }}" class="form-control"
                   placeholder="Código do cartão" aria-label="id_cartao"
                {{'readonly'}}>
        </div>
        <div class="col-md-2">
            <label class="form-label" for="id_cadastro">Código do cadastro</label>
            <input type="text" name="id_cadastro" id="id_cadastro"
                   value="{{$cartao->cadastro->id_cadastro ?? $cadastro->id_cadastro}}" class="form-control"
                   placeholder="Código do cadastro" aria-label="id_cartao"
                {{'readonly'}}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            @if($cartao->vaga)
                <label class="form-label" for="id_cadastro">Número da vaga</label>
                <input type="text" name="vaga" value="{{$cartao->vaga ?? ''}}" class="form-control"
                        placeholder="Código do vaga" aria-label="id_vaga"
                    {{ Illuminate\Support\Str::contains(url()->current(),'alterar') ? 'readonly' : '' }}>

            @else
                <label class="form-label" for="inlineFormSelectPref">Número da Vaga</label>
                <select class="form-select" name="vaga" id="inlineFormSelectPref">
                    <option selected>Selecione</option>
                    @foreach($vagas as $vaga)
                        @if($vaga->cheia == 0)
                            <option value="{{$vaga->id_vaga}}">{{$vaga->id_vaga}}</option>
                        @endif
                    @endforeach
                </select>
            @endif
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4">
            <label class="form-label" for="hora_entrada">Hora de entrada</label>
            <input type="text" id="hora_entrada" name="hora_entrada" value="{{$cartao->hora_entrada}}" class="form-control"
                   placeholder="Hora de entrada" aria-label="hora_entrada"
                {{'readonly'}}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4">
            <label class="form-label" for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{$cartao->cadastro->nome ?? $cadastro->nome}}" class="form-control"
                   placeholder="Nome" aria-label="nome"
                {{'readonly'}}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label class="form-label" for="saldo_cartao">Saldo</label>
            <input type="text" id="saldo_cartao" name="saldo_cartao" value="{{$cartao->saldo_cartao ?? '0'}}" class="form-control"
                   placeholder="Saldo" aria-label="saldo"
                {{'readonly'}}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label class="form-label" for="carro">Modelo do carro</label>
            <input type="text" id="carro" name="carro" value="{{$cartao->cadastro->carro ?? $cadastro->carro}}" class="form-control"
                   placeholder="Veículo" aria-label="carro"
                {{'readonly'}}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label class="form-label" for="placa">Número da placa</label>
            <input type="text" id="placa" name="placa" value="{{$cartao->cadastro->placa ?? $cadastro->placa}}" class="form-control"
                   placeholder="Placa" aria-label="placa"
                {{'readonly'}}>
        </div>
    </div>

</div>

