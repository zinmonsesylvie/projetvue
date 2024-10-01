@extends('layouts.app')

@section('template_title')
    Onboards
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Onboards') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('onboards.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Title</th>
									<th >Image</th>
									<th >Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($onboards as $onboard)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $onboard->title }}</td>

                                        <td>
                                            <!-- Affichage de l'image du logo depuis la base de données -->
                                            
                                                <img src="{{ asset('storage/' . $onboard->image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">
                                        </td>

										
										<td >{{ $onboard->description }}</td>

                                            <td>
                                                <form action="{{ route('onboards.destroy', $onboard->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('onboards.show', $onboard->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('onboards.edit', $onboard->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $onboards->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
