@csrf
<div>
    <h1 style="text-align: center">Gerenciamento de usuario</h1>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <label  class="form-label">Nome</label>
            <input type="text" name="nome" value="{{$cadastro->nome ?? '' }}" class="form-control" placeholder="Nome"
                   aria-label="nome"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Veículo</label>
            <input type="text" name="carro" value="{{$cadastro->carro ?? ''}}" class="form-control"
                   placeholder="Veículo" aria-label="carro"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Placa</label>
            <input type="text" name="placa" value="{{$cadastro->placa ?? ''}}" class="form-control" placeholder="AAA-0000 | AAA0A00 "
                   aria-label="placa"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Numero do CPF</label>
            <input type="text" name="cpf" value="{{$cadastro->cpf ?? ''}}" class="form-control" placeholder="XXX.XXX.XXX-XX"
                   aria-label="cpf"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Numero do RG</label>
            <input type="text" name="rg" value="{{$cadastro->rg ?? ''}}" class="form-control" placeholder="XX.XXX.XXX-X"
                   aria-label="rg"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Endereço</label>
            <input type="text" name="endereco" value="{{$cadastro->endereco ?? ''}}" class="form-control"
                   placeholder="Endereco" aria-label="Endereco"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Telefone</label>
            <input type="text" name="telefone" value="{{$cadastro->telefone ?? ''}}" class="form-control"
                   placeholder="(XX) XXXXX-XXXX" aria-label="Telefone"
                {{ !Illuminate\Support\Str::contains(url()->current(),['edit','create']) ? 'readonly' : '' }}>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <label  class="form-label">Saldo</label>
            <input type="text" name="saldo" value="{{$cadastro->saldo ?? '0'}}" class="form-control" placeholder="Saldo"
                   aria-label="Saldo"
                {{'readonly'}}>
        </div>
    </div>
</div>

