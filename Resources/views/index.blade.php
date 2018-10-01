@extends('inventory::layouts.master')

@section('content')
    <h1>Inventory</h1>

    <div class="card-deck mb-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title m-0">Fleet</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Text</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title m-0">Materials</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
    <div class="card-deck my-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title m-0">Equipment</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Text</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-success">
                <h4 class="card-title m-0">Ledger</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
@stop
