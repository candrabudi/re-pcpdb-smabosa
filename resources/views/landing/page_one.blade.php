<div id="biodata-siswa-validation" class="content">
    <div class="content-header mb-3">
        <h4 class="mb-0">Biodata Siswa</h4>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="">Nisn</label>
            <input type="number" name="nisn" id="nisn" value="{{ old('nisn') }}" class="form-control" placeholder="091101" aria-label="john.doe" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="fullName">Nama Lengkap</label>
            <input type="text" name="fullName" id="fullName" value="{{ old('fullName') }}" class="form-control" placeholder="johndoe" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="gender">Jenis Kelamin</label>
            <select class="selectpicker w-auto" id="gender" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="gender">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="religionStudent">Agama</label>
            <select class="selectpicker w-auto" id="religionStudent" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="religionStudent">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="placeOfBirthStudent">Tempat Lahir</label>
            <input type="text" name="placeOfBirthStudent" id="placeOfBirthStudent" class="form-control" placeholder="Yogyakarta" />
        </div>
        <div class="col-sm-6">
            <label for="dateOfBirthStudent" class="form-label">Tanggal lahir</label>
            <input type="text" name="dateOfBirthStudent" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="emailStudent">Email</label>
            <input type="email" name="emailStudent" id="emailStudent" class="form-control" value="{{ old('emailStudent') }}" placeholder="example@example.com" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="noTelpStudent">No Telepon</label>
            <input type="number" name="noTelpStudent" value="{{ old('noTelpStudent') }}" id="noTelpStudent" class="form-control" placeholder="" />
        </div>

        <div class="col-sm-6">
            <label class="form-label" for="noWhatsappStudent">No Whatsapp</label>
            <input type="number" name="noWhatsappStudent" id="noWhatsappStudent" value="{{ old('noWhatsappStudent') }}" class="form-control" placeholder="" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="addressStudent">Alamat Siswa</label>
            <textarea name="addressStudent" id="addressStudent" class="form-control" cols="30" rows="3">{{ old('addressStudent') }}</textarea>
        </div>
        <div class="content-header mb-3 mt-5">
            <h4 class="mb-0">Asal Sekolah</h4>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="originSchoolStudent">Nama Sekolah</label></label>
            <input type="text" name="originSchoolStudent" value="{{ old('originSchoolStudent') }}" id="originSchoolStudent" class="form-control" placeholder="" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="noPhoneSchool">No Telepon Sekolah</label></label>
            <input type="number" name="noPhoneSchool" value="{{ old('noPhoneSchool') }}" id="noPhoneSchool" class="form-control" placeholder="" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="addressOriginSchool">Alamat Sekolah</label>
            <textarea name="addressOriginSchool" id="addressOriginSchool" class="form-control" cols="30" rows="3">{{ old('addressOriginSchool') }}</textarea>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <a class="btn btn-label-secondary btn-prev" style="color: #AEAEAE;" disabled>
                <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </a>
            <a class="btn btn-primary btn-next" style="color: #fff;">
                <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                <i class="ti ti-arrow-right"></i>
            </a>
        </div>
    </div>
</div>