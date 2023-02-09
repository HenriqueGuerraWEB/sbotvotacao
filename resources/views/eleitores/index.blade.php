@extends('eleitores.layout')
 
@section('content')


<div class="uk-section">
    <div class="eleitores">


        <div class="">
            <div class="uk-grid-small uk-child-width-1-2@m uk-margin-medium-bottom" uk-grid>
                <div class="">
                    <h2>Eleitores</h2>
                </div>
                <div class="uk-text-right">
                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('eleitores.create') }}"> Novo Eleitor</a>
                    <a class="uk-button uk-button-secondary uk-border-rounded" href="{{ url('/painel') }}"> Voltar Painel</a>
                </div>
            </div>
            @if (session('status'))
                <p>{{ session('status') }}</p>
            @endif     
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="uk-margin-top">
            <h3></h3>

            <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th>N</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CRM</th>
                <th>Tipo</th>
                <th width="280px"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($eleitores as $eleitor)
            <tr>
            <td>{{ ++$i }}</td>
            <td class="uk-table-link">{{ $eleitor->nome }}</td>
            <td>{{ $eleitor->email }}</td>
            <td>{{ $eleitor->crm }}</td>
            <td>
                @if($eleitor->sbot) SBOT @endif
                @if($eleitor->coomtoce) COOMTOCE @endif
            </td>
            <td class="actions">               
                <!-- <a class="" href="{{ route('eleitores.show',$eleitor->id) }}" uk-tooltip="Ver">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="2"></circle>
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"></path>
                    </svg>
                </a> -->
                <a class="" href="{{ route('eleitores.edit',$eleitor->id) }}" uk-tooltip="Editar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                    <path d="M16 5l3 3"></path>
                    </svg>
                </a>       
                <a href="#modal-center-{{$eleitor->id}}" uk-toggle id="js-modal-confirm" uk-tooltip="Excluir">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="4" y1="7" x2="20" y2="7"></line>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>                     
                </a>         
                <div id="modal-center-{{$eleitor->id}}" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center uk-border-rounded">

                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <p>Deseja realmente excluir o eleitor?</p>
                        <p>{{ $eleitor->nome }}</p>
                        <form action="{{ route('eleitores.destroy',$eleitor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="uk-button uk-button-primary">
                                Excluir
                            </button>
                        </form>

                    </div>
                </div>                

            </td>
            </tr>
        @endforeach

            
        </tbody>
    </table>
</div>




        </div>        
    </div>
</div>


    {!! $eleitores->links() !!}
      
@endsection