@extends('admin-lte.index')

@section('content')
<form class="form-group " method="POST" action="{{route("tipo_bajas.store")}}">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5>
                Agregar un nuevo Tipo de Baja
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="form-group ">
                        <label for="nombre_baja	">Tipo de Baja</label>
                        <input type="text" class="form-control  @error('nombre_baja	') is-invalid @enderror" id="nombre_baja	"
                            name="nombre_baja" value="{{ old('nombre_baja	') }}" placeholder="Especifique el tipo de baja" required>
                        @error('nombre_baja	')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group ">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control  @error('descripcion') is-invalid @enderror" id="descripcion"
                            name="descripcion" value="{{ old('descripcion') }}" placeholder="Especifique el tipo de ingreso" required>
                        @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
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
@endpush