@if($errors->has('ijazahSd'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Ijazah SD maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif
@if($errors->has('aktaKelahiran'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Akta Kelahiran maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif
@if($errors->has('kartuKeluarga'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Kartu Keluarga maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif
@if($errors->has('pasFoto'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Pas Foto maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif
@if($errors->has('softCopyRaportSmp'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Softcopy raport SMP maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif
@if($errors->has('tandaTangan'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
        <i class="ti ti-ban ti-xs"></i>
    </span>
    <!-- <strong>{{ $errors->first('ijazahSd') }}</strong> -->
    <strong>Tanda Tangan maximal ukuran upload file 2mb / 2048kb</strong>
</div>
@endif