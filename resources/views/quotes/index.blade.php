@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Orçamentos</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <tr>
            <th>Veículo</th>
            <th>Cidade</th>
            <th>Características</th>
            <th>Ja tem o veículo?</th>
            <th>Responsável</th>
            <th>Entrada</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($quotes as $quote)
            <tr>
                <td>{{ $quote->id }}</td>
                <td>{{ $quote->location->location }}</td>
                <td>{{ implode(',', $quote->getAllCharacteristics()) }}</td>
                <td>{{ $quote->id}}</td>
                <td>{{ $quote->id}}</td>
                <td>{{ $quote->id}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('quotes.resend_email',$quote->id) }}">Reenviar E-mail</a>
                </td>
            </tr>
        @endforeach
    </table>

    <nav aria-label="Page navigation example">
        {!! $quotes->links() !!}
    </nav>
@endsection