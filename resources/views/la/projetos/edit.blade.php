@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/projetos') }}">Projeto</a> :
@endsection
@section("contentheader_description", $projeto->$view_col)
@section("section", "Projetos")
@section("section_url", url(config('laraadmin.adminRoute') . '/projetos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Projetos Edit : ".$projeto->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($projeto, ['route' => [config('laraadmin.adminRoute') . '.projetos.update', $projeto->id ], 'method'=>'PUT', 'id' => 'projeto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'TP')
					@la_input($module, 'NM')
					@la_input($module, 'VL')
					@la_input($module, 'ST')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/projetos') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#projeto-edit-form").validate({
		
	});
});
</script>
@endpush
