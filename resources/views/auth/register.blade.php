@extends('layouts.app')
<div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center"><h4>{{ __('Registro') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 my-1">
                                <label class="sr-only" for="tipo_usuario">{{ __('tipo_usuario:') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white"><i class="fa fa fa-users"></i>&nbsp;&nbsp;Tipo Usuario:</div>
                                    </div>
                                    <select id="tipo_usuario" class="form-control{{ $errors->has('tipo_usuario') ? ' is-invalid' : '' }}" name="tipo_usuario" autofocus required>
                                            <option>Seleccione ....</option>
                                            <option>Sumimedical</option>
                                            <option>Proveedor</option>
                                            <option>IPS Prestador</option>
                                    </select>
                                @if ($errors->has('tipo_usuario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_usuario') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-6 my-1">
                                <label class="sr-only" for="inlineFormInputGroupUsername">{{ __('Nombre:') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white"><i class="fa fa fa-user">
                                            </i>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Nombre:') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required  placeholder="Ingrese el Nombre">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-6 my-1">
                                <label class="sr-only" for="tipo_documento">{{ __('tipo_documento:') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                            <i class="fa fa fa-id-card-o"></i>&nbsp;&nbsp;{{ __('Tipo Ident:') }}&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                    </div>
                                    <select id="tipo_documento" class="form-control{{ $errors->has('tipo_documento') ? ' is-invalid' : '' }}" name="tipo_documento">
                                            <option>Seleccione ....</option>
                                            <option>Cedula</option>
                                            <option>Nit</option>
                                    </select>
                                @if ($errors->has('tipo_documento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo_documento') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-sm-6 my-1">
                               <label class="sr-only" for="num_documento">{{ __('Nombre:') }}</label>
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                        <i class="fa fa fa-hashtag"></i>&nbsp;&nbsp;&nbsp;Documento:</div>
                                   </div>
                                   <input id="num_documento" type="number" class="form-control{{ $errors->has('num_documento') ? ' is-invalid' : '' }}" name="num_documento" value="{{ old('num_documento') }}" required autofocus placeholder="Ingrese el Documento">
                                   @if ($errors->has('num_documento'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('num_documento') }}</strong>
                                   </span>
                               @endif
                               </div>
                           </div>
                           <div class="col-sm-6 my-1">
                              <label class="sr-only" for="codigo"></label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white"><i class="fa fa fa-qrcode">
                                          </i>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Código:') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                  </div>
                                  <input id="codigo" type="number" class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}" name="codigo" value="{{ old('codigo') }}" placeholder="Ingrese el Código">
                                  @if ($errors->has('codigo'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('codigo') }}</strong>
                                  </span>
                              @endif
                              </div>
                          </div>
                         <div class="col-sm-6 my-1">
                            <label class="sr-only" for="telefono"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                        <i class="fa fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Telefono:') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                </div>
                                <input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus placeholder="Ingrese el telefono">
                                @if ($errors->has('telefono'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-sm-6 my-1">
                           <label class="sr-only" for="direccion"></label>
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white"><i class="fa fa fa-road">
                                       </i>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Dirección:') }}&nbsp;&nbsp;&nbsp;</div>
                               </div>
                               <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" required autofocus placeholder="Ingrese el direccion">
                               @if ($errors->has('direccion'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('direccion') }}</strong>
                               </span>
                           @endif
                           </div>
                       </div>
                       <div class="col-sm-6 my-1">
                          <label class="sr-only" for="departamento"></label>
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                    <i class="fa fa fa-location-arrow"></i>&nbsp;{{ __('Departamento:') }}</div>
                              </div>
                              <input id="departamento" type="text" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ old('departamento') }}" required autofocus placeholder="Ingrese el departamento">
                              @if ($errors->has('departamento'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('departamento') }}</strong>
                              </span>
                          @endif
                          </div>
                      </div>
                      <div class="col-sm-6 my-1">
                         <label class="sr-only" for="municipio"></label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                    <i class="fa fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Municipio:') }}&nbsp;&nbsp;</div>
                             </div>
                             <input id="municipio" type="text" class="form-control{{ $errors->has('municipio') ? ' is-invalid' : '' }}" name="municipio" value="{{ old('municipio') }}" required autofocus placeholder="Ingrese el municipio">
                             @if ($errors->has('municipio'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('municipio') }}</strong>
                             </span>
                         @endif
                         </div>
                     </div>
                     <div class="col-sm-6 my-1">
                        <label class="sr-only" for="email"></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                    <i class="fa fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Correo:') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                            </div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Ingrese el Correo">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="col-sm-6 my-1">
                       <label class="sr-only" for="password"></label>
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                <i class="fa fa fa-user-secret"></i>&nbsp;&nbsp;&nbsp;{{ __('Contraseña:') }}</div>
                           </div>
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus placeholder="Contraseña">
                           @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                       </div>
                   </div>
                   <div class="col-sm-6 my-1">
                        <label class="sr-only" for="password-confirm"></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background: linear-gradient(120deg, #3db9dc, #3db9dc); color:white">
                                    <i class="fa fa fa-user-secret"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Pass Conf:') }}&nbsp;&nbsp;&nbsp;</div>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme Contraseña" required>
                        </div>
                    </div>
                      </div>
                    </div><br>
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-info btn-block" style="color:white">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
