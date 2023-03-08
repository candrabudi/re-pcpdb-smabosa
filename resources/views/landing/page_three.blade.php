<div id="page-three" class="content">
    <div class="content-header mb-3">
        <h4 class="mb-0">Biodata Ayah</h4>
    </div>
    <div class="row g-3">
        <div class="col-sm-6">
            <label class="form-label" for="fullNameFather">Nama Lengkap</label>
            <input type="text" name="fullNameFather" id="fullNameFather" value="{{ old('fullNameFather') }}" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="birthOfPlaceFather">Tempat Lahir</label>
            <input type="text" name="birthOfPlaceFather" id="birthOfPlaceFather" value="{{ old('birthOfPlaceFather') }}" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label for="dateOfBirthFather" class="form-label">Tanggal lahir</label>
            <input type="text" name="dateOfBirthFather" value="{{ old('dateOfBirthFather') }}" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date2" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="religionFather">Agama</label>
            <select class="selectpicker w-auto" id="religionFather" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="religionFather">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Cu">Kong Hu Cu</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="educationFather">Pendidikan</label>
            <select class="selectpicker w-auto" id="educationFather" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="educationFather">
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="workFather">Pekerjaan Ayah</label>
            <input type="text" name="workFather" id="workFather" value="{{ old('workFather') }}" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="incomeFather">Penghasilan Ayah</label>
            <input type="number" name="incomeFather" value="{{ old('incomeFather') }}" id="incomeFather" class="form-control" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="whatsappFather">Nomor Whatsapp</label>
            <input type="number" name="whatsappFather" value="{{ old('whatsappFather') }}" id="whatsappFather" class="form-control" />
        </div>

        <div class="content-header mb-0 mt-5">
            <h4 class="mb-0">Biodata Ibu</h4>
        </div>
        <div class="row g-3">
            <div class="col-sm-6">
                <label class="form-label" for="fullNameMother">Nama Lengkap</label>
                <input type="text" name="fullNameMother" value="{{ old('fullNameMother') }}" id="fullNameMother" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="birthOfPlaceMother">Tempat Lahir</label>
                <input type="text" name="birthOfPlaceMother" value="{{ old('birthOfPlaceMother') }}" id="birthOfPlaceMother" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label for="dateOfBirthMother" class="form-label">Tanggal lahir</label>
                <input type="text" name="dateOfBirthMother" value="{{ old('dateOfBirthMother') }}" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date3" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="religionMother">Agama</label>
                <select class="selectpicker w-auto" id="religionMother" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="religionMother">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="educationMother">Pendidikan</label>
                <select class="selectpicker w-auto" id="educationMother" data-style="btn-transparent" data-icon-base="ti" data-tick-icon="ti-check text-white" name="educationMother">
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="workMother">Pekerjaan Ibu</label>
                <input type="text" name="workMother" value="{{ old('workMother') }}" id="workMother" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="incomeMother">Penghasilan Ibu</label>
                <input type="number" name="incomeMother" value="{{ old('incomeMother') }}" id="incomeMother" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="whatsappMother">Nomor Whatsapp</label>
                <input type="number" name="whatsappMother" value="{{ old('whatsappMother') }}" id="whatsappMother" class="form-control" />
            </div>

            <div class="content-header mb-0 mt-5">
                <h4 class="mb-0">Alamat Orangtua</h4>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="addressParent">Alamat Rumah Orangtua</label>
                <input type="text" name="addressParent" value="{{ old('addressParent') }}" id="addressParent" class="form-control" />
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="phoneNumberHous">Nomor Telepon Rumah</label>
                <input type="text" name="phoneNumberHous" value="{{ old('phoneNumberHous') }}" id="phoneNumberHous" class="form-control" />
            </div>

            <div class="col-12 d-flex justify-content-between">
                <a class="btn btn-label-secondary btn-prev" style="color: #AEAEAE">
                    <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </a>
                <a class="btn btn-primary btn-next" style="color: #FFF">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>