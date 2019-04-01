@extends('layouts.layout')

@section('content')
            <section class="panel panel-default">
                <header class="panel-heading font-bold">
                  {{ __('Register') }}
                </header>
                
                <div class="panel-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('datauser.update', $user) }}">
                        @csrf
                         {{ method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="hak-akses" class="col-md-4 col-form-label text-md-right" value="{{ $user->hak_akses }}">Hak Akses</label>

                        <div class="col-md-6">
                         <select class="form-control" placeholder="Tingkat" name="hak_akses">
                          <option value="1"> Admin </option>
                          <option value="2"> Super Admin </option>
                         </select>
                        </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('datauser.index') }}" class="btn btn-default">Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

      </section>
@endsection
