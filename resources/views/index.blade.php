@extends('app')
@section('title', 'Test Biis Corp | Data Pegawai')
@section('content')
@include('loading')
<div class="az-content">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Hi, welcome to my test!</h2>
                    <p class="az-dashboard-text">Selamat datang di halaman Web BiisCorp.</p>
                </div>
                <div class="az-content-header-right">
                    <div class="media">
                        <div class="media-body">
                            <label>Tanggal tes</label>
                            <h6>11 Sep, 2024</h6>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <label>Selesai tes</label>
                            <h6>12 Sep, 2024</h6>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <label>Kategori</label>
                            <h6>Test Coding</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="az-dashboard-nav"></div>
        </div>
    </div>
    <div class="row-class">
        <div class="row position-relative">
            <div class="col-sm-6">
                <div class="az-content-label mg-b-5">Data Pegawai</div>
                <p class="mg-b-20">Data pegawai BiisCorp.</p>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-tambah">Tambah Data</a>
            </div>
        </div>
        <table id="datalist" class="display responsive nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>E-mail</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>Tanggal Masuk</th>
                    <th>Foto</th>
                    <th>@</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="modal fade" id="modal-form" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span id="titlemodal">Tambah </span> Data Pegawai</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form id="submit-form">
                @csrf
                <div class="modal-body">
                    <input class="form-control" name="updateid" id="updateid" type="hidden">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" id="nama" maxlength="50" placeholder="Nama" name="nama" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" id="email" max="100" placeholder="E-Mail" name="email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input type="tel" maxlength="15" id="telepon" name="telepon" class="form-control telepon" placeholder="cth : 81232xxxx" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sub_style_id">Jabatan</label>
                        <select class="select2 form-control" name="jabatan" id="jabatan" style="width: 100%" required></select>
                    </div>
                    <div class="form-group">
                        <label for="gaji">Gaji</label>
                        <input class="form-control" placeholder="Gaji" id="gaji" name="gaji" type="number" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control fc-datepicker bg-white" name="tanggal_masuk" id="tanggal_masuk" readonly placeholder="MM/DD/YYYY" required>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <div class="preview">
                            <img class="img-prev" src="" alt="foto" />
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/png, image/jpeg" required>
                            <label class="custom-file-label label-foto" for="foto">Pilih foto</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-batal" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-simpan" id="savebtn">Simpan</button>
                </div>
            </form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-foto" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Foto <span id="titlemodalfoto"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <img class="foto-modal" src=''/>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-batal" data-dismiss="modal">Tutup</button>
            </div>
		</div>
	</div>
</div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function () {
            const dttb = $('#datalist').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                searchDelay: 500,
                responsive: true,
                dom: 'lfrtip',
                ajax: {
                    url: '{!! route('getdata') !!}',
                    type: 'get',
                },
                columns: [
                    {data: 'DT_RowIndex', name:'id', orderable: true, searchable: false},
                    {data: 'nama'},
                    {data: 'telepon'},
                    {data: 'email'},
                    {data: 'jabatan.jabatan'},
                    {data: 'gajinumber', searchable: false},
                    {data: 'tanggal_masuk', searchable: false},
                    {data: 'fotobtn', searchable: false, orderable: false},
                    {data: 'action', searchable: false, orderable: false},
                ],
                language: {
                    processing: ''
                },
            });

            $('.btn-tambah').click(function(){
                $('#titlemodal').text('Tambah');
                $('#update_id').val('');
                $('#nama').val('');
                $('#telepon').val('');
                $('#email').val('');
                $('#jabatan').find('option').remove();
                $('#gaji').val('');
                $('#tanggal_masuk').val('');
                $('#foto').attr('required', true);
                $('#foto').val('');
                $('.preview').hide();
                $('.label-foto').text('Pilih foto');
                $('#modal-form').modal('show');
            });

            $('body').on('click', '.fotobtn', function(){
                let id = $(this).data('id');
                $.ajax({
                    type: "get",
                    url: "{!! route('getdatabyid') !!}/?id=" + id,
                    dataType: "json",
                    success: function (r) {
                        const foto = r.foto;
                        $('#titlemodalfoto').text(r.nama)
                        $('.foto-modal').attr('src', `{{ asset("img/upload") }}/`+foto);
                        $('#modal-foto').modal('show');
                    },
                    error: (x, h, r) => {
                        swal('Warning!', x.responseText, 'warning');
                    },
                    complete: () => {
                        $('#loading').hide();
                    }
                });
            });


            $('body').on('click', '.editbtn', function(){
                let id = $(this).data('id');
                $.ajax({
                    type: "get",
                    url: "{!! route('getdatabyid') !!}/?id=" + id,
                    dataType: "json",
                    success: function (r) {
                        $('#titlemodal').text('Ubah');
                        $('#updateid').val(r.id);
                        $('#nama').val(r.nama);
                        $('#telepon').val(r.telepon);
                        $('#email').val(r.email);
                        $('#jabatan').append(new Option(r.jabatan, r.jabatan_id, true, true));
                        $('#gaji').val(r.gaji);
                        $('#tanggal_masuk').val(r.tanggal_masuk);
                        $('#foto').removeAttr('required');
                        $('.preview').show();
                        $('.label-foto').text('Ganti foto');
                        $('.img-prev').attr('src', "{{ asset('img/upload') }}/"+r.foto);
                        $('#modal-form').modal('show');
                    },
                    error: (x, h, r) => {
                        swal('Warning!', x.responseText, 'warning');
                    },
                    complete: () => {
                        $('#loading').hide();
                    }
                });
            });

            $('body').on('click', '.deletebtn', function(){
                let id = $(this).data('id');
                swal({
                    title: 'Apakah kamu yakin hapus data?',
                    text: 'Data yang dihapus tidak dapat dikembalikan!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true
                })
                .then((v) => {
                    if(v) {
                        $('#loading').show();
                        $.ajax({
                            type: "DELETE",
                            url: '{!! route('deletedata') !!}',
                            dataType: "json",
                            data:{
                                'id': id,
                                '_token': '{{ csrf_token() }}',
                            },
                            success: function (r) {
                                swal('Success!', r, 'success');
                                dttb.ajax.reload(null, false);
                            },
                            error: (x, h, r) => {
                                swal('Warning!', x.responseText, 'warning');
                            },
                            complete: () => {
                                $('#loading').hide();
                            }
                        });
                    }
                })
            });

            $('.fc-datepicker').datetimepicker({
                timepicker:false,
                format:'Y-m-d',
                maxDate: '0'
            });

            $('.telepon').on('input',function () {
                var v = $(this).val();
                if (v.charAt(0) == '0') {
                    $(this).val(v.substring(1))
                }
            });

            $('#jabatan').select2({
                placeholder: 'Pilih Jabatan',
                dropdownParent: $('#modal-form .modal-content'),
                ajax: {
                    url: '{!! route('getjabatan') !!}',
                    dataType: 'json',
                    delay: 500,
                    type: 'get',
                    data: function(params) {
                        var query = {
                            q: params.term,
                            page: params.page || 1,
                            _token: $('meta[name=csrf-token]').attr('content'),
                        }
                        return query;
                    },
                    processResults: function (data, params) {
                        return {
                            results:  $.map(data.data, function (item) {
                                return {
                                    text: item.jabatan,
                                    id: item.id
                                }
                            }),
                            pagination: {
                                more: data.to < data.total
                            }
                        };
                    },
                }
            });

            $('#submit-form').on('submit', function (e) {
                e.preventDefault();
                $('#loading').show();
                $.ajax({
                    type: "post",
                    url: '{!! route('savedata') !!}',
                    data: new FormData(this),
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function (r) {
                        $('#update_id').val('');
                        $('#nama').val('');
                        $('#telepon').val('');
                        $('#email').val('');
                        $('#jabatan').find('option').remove();
                        $('#gaji').val('');
                        $('#tanggal_masuk').val('');
                        $('#foto').val('');
                        $('#modal-form').modal('hide');
                        dttb.ajax.reload(null, false);
                        swal('Success!', r, 'success');
                    },
                    error: (x, h, r) => {
                        swal('Warning!', x.responseText, 'warning');
                    },
                    complete: () => {
                        $('#loading').hide();
                    }
                });
            });
            function readURL(input, previewId) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(previewId).attr('src', e.target.result);
                        $('.preview').fadeIn(300);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#foto').change(function(){
                readURL(this, '.img-prev');
            });
        });
    </script>
@endsection
