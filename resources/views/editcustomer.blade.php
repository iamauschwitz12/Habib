@extends('hayuk')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card">

                <div class="card-header">Form Kunjungan PalComTech</div>

                <div class="card-body">

                    <form name="frm_add" id="frm_add" class="form-horizontal" action="/editcustomer/{{ $outletcustomer->id }}" method="POST" enctype="multipart/form-data">
                      @method('patch')
                            @csrf

                        <div class="modal-body">

                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama</label>
                                <div class="col-lg-4">
                                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Alamat</label>
                                <div class="col-lg-4">
                                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Aktifitas Sekarang</label>
                                <div class="col-lg-4">
                                    <input type="text" name="aktifitas" placeholder="aktifitas" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">No WA/No telpon</label>
                                <div class="col-lg-4">
                                    <input type="text" name="hp" placeholder="No Hp" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Instragram</label>
                                <div class="col-lg-4">
                                    <input type="text" name="instagram" placeholder="Instagram" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama Facebook</label>
                                <div class="col-lg-4">
                                    <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Minat Program</label></label>
                                <div class="col-lg-4">
                                    <input type="text" name="minat" placeholder="Minat Program" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Informasi dari</label></label>
                                <div class="col-lg-4">
                                    <input type="text" name="info" placeholder="Tau PalComTech Dari Mana?" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-3 control-label">Tanggal Janji Daftar</label>
                                <div class="col-lg-4">
                                    <input type="text" name="tgl_janji" id="date" placeholder="Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Tanggal Kunjungan</label>
                                <div class="col-lg-4">
                                    <input type="text" name="tgl_kunjung" id="date1" placeholder="Tanggal kunjungan" class="form-control">
                                </div>
                            </div>



                        </div>

                        <div class="modal-footer">

                            <a href="/" class="btn btn-danger" data-dismiss="modal">Back</a>

                            <button type="submit" class="btn btn-primary">Edit</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

          $(document).ready(function() {

            $('#date').datepicker({

                format: 'yyyy-mm-dd',

                autoclose: true,

            });

          });

        </script>

<script>

$(document).ready(function() {

  $('#date1').datepicker({

      format: 'yyyy-mm-dd',

      autoclose: true,

  });

});

</script>


@endsection
