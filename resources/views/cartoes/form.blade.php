@csrf
<div>
    <h1 style="text-align: center; margin-top: 50px">Gerenciamento de cartão</h1>
    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <input type="text" name="id_cartao" value="{{$cartao->id_cartao ?? ''}}" class="form-control" placeholder="Código do cartão" aria-label="id_cartao">
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4">
            <input type="text" name="nomeUsuario" value="{{$cartao->usuario->nome ?? '' }}" class="form-control" placeholder="Nome" aria-label="nome">
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <input type="text" name="saldo" value="{{$cartao->saldo ?? ''}}" class="form-control" placeholder="Saldo" aria-label="saldo">
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <input type="text" name="carro" value="{{$cartao->usuario->carro ?? ''}}" class="form-control" placeholder="Veículo" aria-label="carro">
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 ">
            <input type="text" name="placa" value="{{$cartao->usuario->placa ?? ''}}" class="form-control" placeholder="Placa" aria-label="placa">
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px">
         <div class="col-md-4">
              <input type="text" name="hora_entrada" value="{{$cartao->hora_entrada ?? ''}}" class="form-control" placeholder="Hora de entrada" aria-label="hora_entrada">
         </div>
    </div>
</div>

