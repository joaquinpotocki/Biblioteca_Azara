@extends('admin-lte.index')

@section('content')
<form class="form-group " method="POST" action="{{route("lectores.update", $lector->id)}}">
    @method('PUT')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5>
                Edicion lector
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group ">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control  @error('nombres') is-invalid @enderror" id="nombres"
                            name="nombres" value="{{ old('nombres')  ?? $lector->nombres }}"
                            placeholder="Especifique sus nombres" required>
                        @error('nombres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group ">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control  @error('apellidos') is-invalid @enderror" id="apellidos"
                            name="apellidos" value="{{ old('apellidos') ?? $lector->apellidos}}"
                            placeholder="Especifique sus apellidos" required>
                        @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group ">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control  @error('fecha_nacimiento') is-invalid @enderror"
                            id="fecha_nacimiento" name="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento') ?? $lector->fecha_nacimiento}}"
                            placeholder="Especifique sus fecha_nacimiento" required>
                        @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group ">
                        <label for="sexo" class="">Sexo</label>
                        <select name="sexo" id="sexo" class="form-control" required>
                            <option value="" selected disabled>--Seleccione--</option>
                            <option value="FEMENINO" @if(("FEMENINO"==old('sexo')) || ("FEMENINO"==$lector->sexo))
                                selected
                                @endif>Femenino</option>
                            <option value="MASCULINO" @if(("MASCULINO"==old('sexo')) || ("MASCULINO"==$lector->sexo))
                                selected
                                @endif>Masculino</option>
                            <option value="NO ACLARA" @if(("NO ACLARA"==old('sexo')) || ("NO ACLARA"==$lector->sexo))
                                selected
                                @endif>No aclara</option>
                        </select>
                        @error('sexo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group ">
                        <label for="dni">CUIL</label>
                        <input type="text" class="form-control  @error('cuil') is-invalid @enderror" id="cuit-number"
                            name="cuil" value="{{ old('cuil') ?? $lector->cuil}}" placeholder="Especifique su cuil"
                            required>
                        @error('cuil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group ">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control  @error('telefono') is-invalid @enderror" id="telefono"
                            name="telefono" value="{{ old('telefono') ?? $lector->telefono }}"
                            placeholder="Especifique su telefono" required>
                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') ?? $lector->email}}" placeholder="Especifique su email"
                            required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group ">
                        <label for="pais_id" class="">Pais</label>
                        <select name="pais_id" id="pais_id" class=" form-control" required>
                            <option value="" selected disabled>--Seleccione--</option>
                            @foreach ($paises as $pais)
                            <option value="{{$pais->id}}" @if($pais->id == $lector->direccion->pais->id) selected
                                @endif>{{$pais->pais}}</option>
                            @endforeach
                        </select>
                        @error('pais_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group ">
                        <label for="provincia_id" class="">Provincia</label>
                        <select name="provincia_id" id="provincia_id" class=" form-control">
                        </select>
                        <input type="hidden" id="valorProvincia" value="{{$lector->direccion->provincia->id}}">
                        @error('provincia_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="localidad_id" class="">Localidad</label>

                        <select name="localidad_id" id="localidad_id" class="form-control">
                        </select>
                        <input type="hidden" id="valorLocalidad" value="{{$lector->direccion->localidad->id}}">
                        @error('localidad_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group ">
                        <label for="calle">Calle</label>
                        <input type="text" class="form-control  @error('calle') is-invalid @enderror" id="calle"
                            name="calle" value="{{ old('calle') ?? $lector->direccion->calle}}"
                            placeholder="Especifique su calle" required>
                        @error('calle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group ">
                        <label for="altura">Altura</label>
                        <input type="number" class="form-control  @error('altura') is-invalid @enderror" id="altura"
                            name="altura" value="{{ old('altura') ?? $lector->direccion->altura}}" placeholder="Nº"
                            required>
                        @error('altura')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label for="nombre">Notas Particulares</label>
                <textarea name="notas_particulares" id="notas_particulares" cols="30" rows="10" class="form-control"
                    placeholder="Ingrese las notas particulares">{{ old('notas_particulares') ?? $lector->notas_particulares}}</textarea>
            </div>
        </div>
        <div class="card-footer float">
            <div class="float-right">
                <a href="javascript:history.back()" class="btn btn-dark"><i class="fa fa-times"></i> Cancelar </a>
                <button type="submit" class="btn btn-primary "><i class="fa fa-check"></i> Guardar</button>
            </div>
        </div>
    </div>
    @csrf
</form>
@endsection
@push('scripts')

<script>
    $(document).ready(function(){
        $('#isbn').mask('000-0-00-000000-0');
        //$('#cuit-number').mask('00-00000000-0');
    });
</script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js')}}"></script>

<script type="text/javascript">
    document.getElementById("fecha_nacimiento").max = new Date().toISOString().split("T")[0];
</script>
<script>
    $(document).ready(function(){

            $('#provincia_id').removeAttr('disabled');
            var id = parseInt('{{$lector->direccion->pais->id}}')
            var url = "{{ route('paises.obtenerProvincias', ":id") }}" ;
            url = url.replace(':id' , id) ;
            $.get(url, function(data){
                var html_select = '<option value=""  disabled>--Seleccione--</option>' ;
                for(var i = 0 ; i<data.length ; i++){
                    console.log(data[i].id == parseInt('{{$lector->direccion->provincia->id}}'))
                    if(data[i].id == parseInt('{{$lector->direccion->provincia->id}}')){
                        html_select += '<option value="'+data[i].id+'" selected>'+data[i].provincia+'</option>' ;
                    }else{
                        html_select += '<option value="'+data[i].id+'">'+data[i].provincia+'</option>' ;
                    }
                }
                 $('#provincia_id').html(html_select);
            });


            $('#localidad_id').removeAttr('disabled');
            var id = parseInt('{{$lector->direccion->provincia->id}}')
            var url = "{{ route('provincias.obtenerLocalidades', ":id") }}" ;
            url = url.replace(':id' , id) ;
            $.get(url, function(data){
                var html_select = '<option value=""  disabled>--Seleccione--</option>' ;
                for(var i = 0 ; i<data.length ; i++){
                    if(data[i].id == parseInt('{{$lector->direccion->localidad->id}}')){
                        html_select += '<option value="'+data[i].id+'" selected>'+data[i].localidad+'</option>' ;
                    }else{
                        html_select += '<option value="'+data[i].id+'">'+data[i].localidad+'</option>' ;
                    }
                }
                 $('#localidad_id').html(html_select);
            });

            $('#pais_id').change(function(){
            $('#provincia_id').removeAttr('disabled');
            var id = $(this).val();
            var url = "{{ route('paises.obtenerProvincias', ":id") }}" ;
            url = url.replace(':id' , id) ;
            $.get(url, function(data){
                var html_select = '<option value="" selected disabled>--Seleccione--</option>' ;
                for(var i = 0 ; i<data.length ; i++){
                     html_select += '<option value="'+data[i].id+'">'+data[i].provincia+'</option>' ;
                }
                 $('#provincia_id').html(html_select);
            });
        });
        $('#provincia_id').change(function(){
            $('#localidad_id').removeAttr('disabled');
            var id = $(this).val();
            var url = "{{ route('provincias.obtenerLocalidades', ":id") }}" ;
            url = url.replace(':id' , id) ;
            $.get(url, function(data){
                var html_select = '<option value="" selected disabled>--Seleccione--</option>' ;
                for(var i = 0 ; i<data.length ; i++){
                     html_select += '<option value="'+data[i].id+'">'+data[i].localidad+'</option>' ;
                }
                 $('#localidad_id').html(html_select);
            });
        });
    }) ;
</script>
@endpush