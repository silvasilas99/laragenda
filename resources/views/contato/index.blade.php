@extends('layout.page')

@section('stylecss')
    <style media="screen">
        .img-avatar-xs {
            width: 30px;
            height: 30px;
            /* border: 1px solid #c0c0c0; */
            border-radius: 30px;
        }
        .a-line {
            line-height: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body p-0">
                <div class="table-responsive border-0">
                    <table class="table table-hover" style="margin-bottom: inherit">
                        <tbody>
                            @foreach ($contatos as $contato)
                            <tr>
                                <td style="padding-right: 1vw">
                                    <a href="{{ url('contato/'.$contato->id) }}">
                                        <img src="{{ $contato->avatar_image }}" class="img-avatar-xs">    
                                    </a>     
                                </td>
                                <td style="padding-right: 1vw"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->nome }}</a></td>
                                <td class="d-none d-md-table-cell" style="padding-right: 1vw"><a class='a-line' href="{{ url('contato'.$contato->id) }}">{{ $contato->telefone }}</a></td>
                                <td class="d-none d-md-table-cell" style="padding-right: 1vw"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->email }}</a></td>
                                <td class="d-none d-md-table-cell" style="padding-right: 3vw"><a class='a-line' href="{{ url('contato/'.$contato->id) }}">{{ $contato->data_nascimento}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('paginacao')
    {{ $contatos->links() }}
@endsection

@section('novo')
    <a href="{{ url('contato/add') }}" class="btn btn-primary btn-sm float-right">Novo contato</a>
@endsection