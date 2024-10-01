@extends('layouts.app')

@section('template_title')
    {{ $onboard->name ?? __('Show') . " " . __('Onboard') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Onboard</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('onboards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Title:</strong>
                            {{ $onboard->title }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Image:</strong>
                            {{ $onboard->image }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Description:</strong>
                            {{ $onboard->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
