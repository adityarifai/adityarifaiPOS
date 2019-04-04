@extends('master')
@section('content')
<!-- START EDIT TOKO -->
	<div>
		<div class="dialog-header">
			<div class="dialog-title text-center">Edit Toko</div>
		</div>
		<form action="{{route('toko.update', $edit->id)}}" method="POST">
			<div class="dialog-content">
				<div class="dialog-body">
					{{ csrf_field() }}
                    {{ method_field('PUT') }}
					<div class="dialog-body">
						<div class='p-2'>
							<div class='abc input'>
								<input type='text' data-role='input' data-prepend='Nama' placeholder='Nama Instansi' data-validate='minlength=3' class=' data-role-input='true' name='nama' id='nama' value="{{ $edit->namainstansi }}">
							</div>
							<div class='abc input'>
								<input type='number' data-role='input' data-prepend='Telepon' placeholder='Telepon' data-validate='minlength=6' class=' data-role-input='true' name='telepon' value="{{ $edit->telp}}">
							</div>
							<div class='abc input'>
								<input type='text' data-role='input' data-prepend='Kode Pos' placeholder='Kode Pos' data-validate='minlength=4' class=' data-role-input='true' name='kodepos' value="{{ $edit->kodepos }}">
							</div>
							<div class='abc input'>
								<input type='text' data-role='input' data-prepend='Deskripsi' placeholder='Deskripsi' data-validate='minlength=5' class=' data-role-input='true' name='deskripsi' value="{{ $edit->deskripsi}}">
							</div>
							<div class='abc input'>
								<input type='text' data-role='input' data-prepend='Alamat' placeholder='Alamat' data-validate='minlength=5' class=' data-role-input='true' name='alamat' value="{{ $edit->alamat }}">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dialog-actions text-right">
				<a href="{{route('toko.all')}}" class="button js-dialog-close alert"><span class="mif-cancel"></span>&nbsp;Batalkan</a>
				<button type="submit" class="button primary js-dialog-close" onclick="Metro.notify.create('This is a notify.', 'Title', {keepOpen: false});"><span class="mif-checkmark"></span>&nbsp;Tambahkan</button>
			</div>
		</form>
	</div>
	<!-- END EDIT TOKO -->
	@endsection