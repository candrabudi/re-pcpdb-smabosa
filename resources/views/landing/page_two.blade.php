<div id="page-two" class="content">
    <div class="row g-3">

        <!-- Nilai Siswa Kelas 7 Sampai Kelas 9 -->
        <div class="content-header mb-2">
            <h4 class="mb-0">Nilai Siswa Kelas 7, 8, dan 9</h4>
        </div>

        <!-- Form Input untuk nilai kelas 7 -->
        <div class="col-sm-6">
            <label class="form-label" for="scoreSevenGradeSemesterOne">Kelas 7 Semester 1</label>
            <input type="number" id="scoreSevenGradeSemesterOne" name="scoreSevenGradeSemesterOne" value="{{ old('scoreSevenGradeSemesterOne') }}" class="form-control" placeholder="90" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="scoreSevenGradeSemesterTwo">Kelas 7 Semester 2</label>
            <input type="number" id="scoreSevenGradeSemesterTwo" name="scoreSevenGradeSemesterTwo" value="{{ old('scoreSevenGradeSemesterTwo') }}" class="form-control" placeholder="90" />
        </div>

        <!-- Form Input untuk nilai kelas 8 -->
        <div class="col-sm-6">
            <label class="form-label" for="scoreEightGradeSemesterOne">Kelas 8 Semester 1</label>
            <input type="number" id="scoreEightGradeSemesterOne" name="scoreEightGradeSemesterOne" value="{{ old('scoreEightGradeSemesterOne') }}" class="form-control" placeholder="90" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="scoreEightGradeSemesterTwo">Kelas 8 Semester 2</label>
            <input type="number" id="scoreEightGradeSemesterTwo" name="scoreEightGradeSemesterTwo" value="{{ old('scoreEightGradeSemesterTwo') }}" class="form-control" placeholder="90" />
        </div>

        <!-- Form Input untuk nilai kelas 9 -->
        <div class="col-sm-6">
            <label class="form-label" for="scoreNineGradeSemesterOne">Kelas 9 Semester 1</label>
            <input type="number" id="scoreNineGradeSemesterOne" name="scoreNineGradeSemesterOne" value="{{ old('scoreNineGradeSemesterOne') }}" class="form-control" placeholder="90" />
        </div>
        <div class="col-sm-6">
            <label class="form-label" for="scoreNineGradeSemesterTwo">Kelas 9 Semester 2</label>
            <input type="number" id="scoreNineGradeSemesterTwo" name="scoreNineGradeSemesterTwo" value="{{ old('scoreNineGradeSemesterTwo') }}" class="form-control" placeholder="90" />
        </div>

        <!-- Absensi Siswa Kelas 7 sampai Kelas 9 -->
        <div class="content-header mb-2">
            <h4 class="mb-0">Absensi Kelas 7, 8, dan 9</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickSevenGradeSemesterOne">Sakit Kelas 7 Semester 1</label>
                        <input type="number" id="sickSevenGradeSemesterOne" value="{{ old('sickSevenGradeSemesterOne') }}" name="sickSevenGradeSemesterOne" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionSevenGradeSemesterOne">Izin Kelas 7 Semester 1</label>
                        <input type="number" id="permissionSevenGradeSemesterOne" name="permissionSevenGradeSemesterOne" value="{{ old('permissionSevenGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaSevenGradeSemesterOne">TK Kelas 7 Semester 1</label>
                        <input type="number" id="alphaSevenGradeSemesterOne" name="alphaSevenGradeSemesterOne" value="{{ old('alphaSevenGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickSevenGradeSemesterTwo">Sakit Kelas 7 Semester 2</label>
                        <input type="number" id="sickSevenGradeSemesterTwo" name="sickSevenGradeSemesterTwo" value="{{ old('sickSevenGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionSevenGradeSemesterTwo">Izin Kelas 7 Semester 2</label>
                        <input type="number" id="permissionSevenGradeSemesterTwo" name="permissionSevenGradeSemesterTwo" value="{{ old('permissionSevenGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaSevenGradeSemesterTwo">TK Kelas 7 Semester 2</label>
                        <input type="number" id="alphaSevenGradeSemesterTwo" name="alphaSevenGradeSemesterTwo" value="{{ old('alphaSevenGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickEightGradeSemesterOne">Sakit Kelas 8 Semester 1</label>
                        <input type="number" id="sickEightGradeSemesterOne" name="sickEightGradeSemesterOne" value="{{ old('sickEightGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionEightGradeSemesterOne">Izin Kelas 8 Semester 1</label>
                        <input type="number" id="permissionEightGradeSemesterOne" name="permissionEightGradeSemesterOne" value="{{ old('permissionEightGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaEightGradeSemesterOne">TK Kelas 8 Semester 1</label>
                        <input type="number" id="alphaEightGradeSemesterOne" name="alphaEightGradeSemesterOne" value="{{ old('alphaEightGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickEightGradeSemesterTwo">Sakit Kelas 8 Semester 2</label>
                        <input type="number" id="sickEightGradeSemesterTwo" name="sickEightGradeSemesterTwo" value="{{ old('sickEightGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionEightGradeSemesterTwo">Izin Kelas 8 Semester 2</label>
                        <input type="number" id="permissionEightGradeSemesterTwo" name="permissionEightGradeSemesterTwo" value="{{ old('sickEightGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaEightGradeSemesterTwo">TK Kelas 8 Semester 2</label>
                        <input type="number" id="alphaEightGradeSemesterTwo" name="alphaEightGradeSemesterTwo" value="{{ old('alphaEightGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickNineGradeSemesterOne">Sakit Kelas 9 Semester 1</label>
                        <input type="number" id="sickNineGradeSemesterOne" name="sickNineGradeSemesterOne" value="{{ old('sickNineGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionNineGradeSemesterOne">Izin Kelas 9 Semester 1</label>
                        <input type="number" id="permissionNineGradeSemesterOne" name="permissionNineGradeSemesterOne" value="{{ old('permissionNineGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaNineGradeSemesterOne">TK Kelas 9 Semester 1</label>
                        <input type="number" id="alphaNineGradeSemesterOne" name="alphaNineGradeSemesterOne" value="{{ old('alphaNineGradeSemesterOne') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="form-label" for="sickNineGradeSemesterTwo">Sakit Kelas 9 Semester 2</label>
                        <input type="number" id="sickNineGradeSemesterTwo" name="sickNineGradeSemesterTwo" value="{{ old('sickNineGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="permissionNineGradeSemesterTwo">Izin Kelas 9 Semester 2</label>
                        <input type="number" id="permissionNineGradeSemesterTwo" name="permissionNineGradeSemesterTwo" value="{{ old('permissionNineGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="alphaNineGradeSemesterTwo">TK Kelas 9 Semester 2</label>
                        <input type="number" id="alphaNineGradeSemesterTwo" name="alphaNineGradeSemesterTwo" value="{{ old('alphaNineGradeSemesterTwo') }}" class="form-control" placeholder="0" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-between">
            <a class="btn btn-label-secondary btn-prev" style="color: #AEAEAE;">
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