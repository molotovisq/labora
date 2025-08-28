@extends('layouts.app')

@section('content')
    <div class="grid gap-6 md:grid-cols-2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Card DaisyUI</h2>
                <p>Se você está vendo estilos aqui, DaisyUI + Tailwind estão funcionando.</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Ação</button>
                </div>
            </div>
        </div>

        <div class="alert alert-success">
            <span>Classes do Tailwind também foram aplicadas!</span>
        </div>
    </div>
@endsection
