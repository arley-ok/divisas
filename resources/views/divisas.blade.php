
@extends('layouts.plantilla')


@section('contenido')
<div class="container pb-5">
    <div class="row">
        @foreach ($divisas as $divisa)

            @if (in_array($divisa['casa']['nombre'], $vista))

                <div class="col-12 col-sm-6 p-4">

                    <div class="card">
                        <h2 class="card-title bg-success text-white p-2">{{$divisa['casa']['nombre']}}</h2>
                        <div class="card-body">
                            <div class="card-text">
                            <p>Compra: $<strong>{{$divisa['casa']['compra']}}</strong></p>
                            <p>Venta: $<strong>{{$divisa['casa']['venta']}}</strong></p>
                            </div>
                        </div>
                    </div>

                </div>

            @endif

        @endforeach
    </div>

    @foreach ($divisas as $divisa)

    @endforeach

    <div class="text-center">
        <button class="btn btn-primary btn-lg mt-4" type="button" data-bs-toggle="modal" data-bs-target="#masDivisas">Otras Cotizaciones</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="masDivisas" tabindex="-1" aria-labelledby="masDivisasModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="masDivisasModalLabel">Cotizaciones</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul class="list-group">

                @foreach ($divisas as $divisa)

                @if (!in_array($divisa['casa']['nombre'], $vista))

                <li class="list-group-item"><a href="/divisas/{{$divisa['casa']['nombre']}}" class="text-decoration-none">{{$divisa['casa']['nombre']}}</a></li>

                @endif

                @endforeach

            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>

</div>
@endsection

