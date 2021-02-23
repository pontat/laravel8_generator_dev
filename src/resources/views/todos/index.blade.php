@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Todos</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('todos.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        {!! Form::open(['method'=>'get', 'route' => ['todos.index']]) !!}

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-6">
                        {!! Form::label('queryText', 'Title') !!}
                        {!! Form::text('queryText', $queryText, ['class' => 'form-control', 'placeholder' => 'キーワードを入力']) !!}
                    </div>
                    <div class="form-group col-sm-4">
                        {!! Form::label('status', 'Status') !!}
                        {!! Form::select('status', [null => 'すべて', '0' => '未対応', '1' => '処理中', '2' => '処理済み', '3' => '完了'], $status, ['class' => 'form-control custom-select']) !!}
                    </div>
                    <div class="form-group col-sm-2 mt-4 pt-2">
                        {!! Form::hidden('sort', $sort, ['class' => 'form-control']) !!}
                        {!! Form::submit('Search', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}

        <div class="card">
            <div class="card-body p-0">
                @include('todos.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

