<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\SchoolOrigin;
use App\Models\StudentDocument;
use App\Models\StudentFather;
use App\Models\StudentMother;
use App\Models\StudentPresence;
use App\Models\StudentScore;
use PDF;
use Intervention\Image\Facades\Image;
use Session;
use Validator;

class LandingpageController extends Controller
{
    public function storeDataStudent(Request $request)
    {
        DB::beginTransaction();
        try{ 
            $validator = Validator::make($request->all(), [
                'ijazahSd' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
                'aktaKelahiran' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
                'kartuKeluarga' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
                'pasFoto' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
                'tandaTangan' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
                'softCopyRaportSmp' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
            ]);
    
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            // $student = new Student();
            // $student->nisn = $request->nisn;
            // $student->full_name = $request->fullName;
            // $student->gender = $request->gender;
            // $student->place_of_birth = $request->placeOfBirthStudent;
            // $student->date_of_birth = $request->dateOfBirthStudent;
            // $student->religion = $request->religionStudent;
            // $student->address = $request->addressStudent;
            // $student->email = $request->emailStudent;
            // $student->no_telp = $request->noTelpStudent;
            // $student->no_wa = $request->noWhatsappStudent;
            // $student->save();
            // $student->fresh();

            // $school = new SchoolOrigin();
            // $school->student_id = $student->id;
            // $school->school_name = $request->originSchoolStudent;
            // $school->school_address = $request->addressOriginSchool;
            // $school->no_telp = $request->noPhoneSchool;
            // $school->save();

            // $total_score = $request->scoreSevenGradeSemesterOne + $request->scoreSevenGradeSemesterTwo + $request->scoreEightGradeSemesterOne + $request->scoreEightGradeSemesterTwo + $request->scoreNineGradeSemesterOne +  $request->scoreNineGradeSemesterTwo;

            // $studentScore = new StudentScore();
            // $studentScore->student_id = $student->id;
            // $studentScore->score_vii_1 = $request->scoreSevenGradeSemesterOne;
            // $studentScore->score_vii_2 = $request->scoreSevenGradeSemesterTwo;
            // $studentScore->score_viii_1 = $request->scoreEightGradeSemesterOne;
            // $studentScore->score_viii_2 = $request->scoreEightGradeSemesterTwo;
            // $studentScore->score_ix_1 = $request->scoreNineGradeSemesterOne;
            // $studentScore->score_ix_2 = $request->scoreNineGradeSemesterTwo;
            // $studentScore->total_score = $total_score;
            // $studentScore->save();


            // $total_sick = $request->sickSevenGradeSemesterOne + $request->sickSevenGradeSemesterTwo + $request->sickEightGradeSemesterOne + $request->sickEightGradeSemesterTwo + $request->sickNineGradeSemesterOne + $request->sickNineGradeSemesterTwo;

            // $total_permission = $request->permissionSevenGradeSemesterOne + $request->permissionSevenGradeSemesterTwo + $request->permissionEightGradeSemesterOne + $request->permissionEightGradeSemesterTwo + $request->permissionNineGradeSemesterOne + $request->permissionNineGradeSemesterTwo;

            // $total_alpa = $request->alphaSevenGradeSemesterOne + $request->alphaSevenGradeSemesterTwo + $request->alphaEightGradeSemesterOne + $request->alphaEightGradeSemesterTwo + $request->alphaNineGradeSemesterOne + $request->alphaNineGradeSemesterTwo;

            // $studentPresence = new StudentPresence();
            // $studentPresence->student_id = $student->id;
            // $studentPresence->s_vii_1 = $request->sickSevenGradeSemesterOne;
            // $studentPresence->i_vii_1 = $request->permissionSevenGradeSemesterOne;
            // $studentPresence->tk_vii_1 = $request->alphaSevenGradeSemesterOne;
            // $studentPresence->s_vii_2 = $request->sickSevenGradeSemesterTwo;
            // $studentPresence->i_vii_2 = $request->permissionSevenGradeSemesterTwo;
            // $studentPresence->tk_vii_2 = $request->alphaSevenGradeSemesterTwo;
            // $studentPresence->s_viii_1 = $request->sickEightGradeSemesterOne;
            // $studentPresence->i_viii_1 = $request->permissionEightGradeSemesterOne;
            // $studentPresence->tk_viii_1 = $request->alphaEightGradeSemesterOne;
            // $studentPresence->s_viii_2 = $request->sickEightGradeSemesterTwo;
            // $studentPresence->i_viii_2 = $request->permissionEightGradeSemesterTwo;
            // $studentPresence->tk_viii_2 = $request->alphaEightGradeSemesterTwo;
            // $studentPresence->s_ix_1 = $request->sickNineGradeSemesterOne;
            // $studentPresence->i_ix_1 = $request->permissionNineGradeSemesterOne;
            // $studentPresence->tk_ix_1 = $request->alphaNineGradeSemesterOne;
            // $studentPresence->s_ix_2 = $request->sickNineGradeSemesterTwo;
            // $studentPresence->i_ix_2 = $request->permissionNineGradeSemesterTwo;
            // $studentPresence->tk_ix_2 = $request->alphaNineGradeSemesterTwo;
            // $studentPresence->total_sick = $total_sick;
            // $studentPresence->total_permission = $total_permission;
            // $studentPresence->total_alpa = $total_alpa;
            // $studentPresence->save();

            // $studentFather = new StudentFather();
            // $studentFather->student_id = $student->id;
            // $studentFather->father_name = $request->fullNameFather;
            // $studentFather->place_of_birth = $request->birthOfPlaceFather;
            // $studentFather->date_of_birth = $request->dateOfBirthFather;
            // $studentFather->education = $request->educationFather;
            // $studentFather->religion = $request->religionFather;
            // $studentFather->profession = $request->workFather;
            // $studentFather->income = $request->incomeFather;
            // $studentFather->no_wa = $request->whatsappFather;
            // $studentFather->save();
            
            // $studentMother = new StudentMother();
            // $studentMother->student_id = $student->id;
            // $studentMother->mother_name = $request->fullNameMother;
            // $studentMother->place_of_birth = $request->birthOfPlaceMother;
            // $studentMother->date_of_birth = $request->dateOfBirthMother;
            // $studentMother->education = $request->educationMother;
            // $studentMother->religion = $request->religionMother;
            // $studentMother->profession = $request->workMother;
            // $studentMother->income = $request->incomeMother;
            // $studentMother->no_wa = $request->whatsappMother;
            // $studentMother->parent_address = $request->addressParent;
            // $studentMother->no_telp_house = $request->phoneNumberHous;
            // $studentMother->save();


            $studentDoc= new StudentDocument();

            $studentDoc->student_id = 1;

            if($request->file('ijazahSd')){
                $file= $request->file('ijazahSd');
                $filename= 'file_ijazah_sd_'.preg_replace('/\s+/', '', $request->full_name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('file_ijazah_sd'), $filename);
                $studentDoc['sd_certificate']= $filename;

            }
           
            if($request->file('aktaKelahiran')){
                $file= $request->file('aktaKelahiran');
                $filename= 'file_akte_lahir_'.preg_replace('/\s+/', '', $request->full_name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('file_akte_lahir'), $filename);
                $studentDoc['birth_certificate']= $filename;
            }

            if($request->file('kartuKeluarga')){
                $file= $request->file('kartuKeluarga');
                $filename= 'file_kk_'.preg_replace('/\s+/', '', $request->full_name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('file_kk'), $filename);
                $studentDoc['family_card']= $filename;
            }
            if($request->file('pasFoto')){
                $file= $request->file('pasFoto');
                $filename= 'file_foto_'.preg_replace('/\s+/', '', $request->full_name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('file_foto'), $filename);
                $studentDoc['pas_photo']= $filename;
            }
            if($request->file('softCopyRaportSmp')){
                $file= $request->file('softCopyRaportSmp');
                $filename= 'file_raport_smp_'.preg_replace('/\s+/', '', $request->full_name).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('file_raport_smp'), $filename);
                $studentDoc['jhs_report']= $filename;
            }
            if($request->file('tandaTangan')){
                $file= $request->file('tandaTangan');
                $filename= 'file_ttd_pendaftaran_'.preg_replace('/\s+/', '', $request->full_name).$file->getClientOriginalExtension();
                $file->move(public_path('file_ttd_pendaftaran'), $filename);
                $studentDoc['signature']= $filename;
            }
           
            $studentDoc->save();

            DB::commit();
            return redirect()->route('ppdb.finish', [1]);
            // return redirect()->back();

        }catch(\Exception $e){

            DB::rollback();
            return response()->json($e->getMessage());
            // return redirect()->back();
        }

    }

    public function finish($student_id)
    {

        $student = Student::where('id', $student_id)->first();

        return view('finishPpdb', compact('student'));

    }
    public function cetakPdf($student_id)
    {
        $student = Student::where('id', $student_id)->first();
        $score_vii_1 = !empty($student->StudentScore->score_vii_1) ? 1 :0;
        $score_vii_2 = !empty($student->StudentScore->score_vii_2) ? 1 :0;
        $score_viii_1 = !empty($student->StudentScore->score_viii_1) ? 1 :0;
        $score_viii_2 = !empty($student->StudentScore->score_viii_2) ? 1 :0;
        $score_ix_1 = !empty($student->StudentScore->score_ix_1) ? 1 :0;
        $score_ix_2 = !empty($student->StudentScore->score_ix_2) ? 1 :0;

        $total_count_score = $score_vii_1 + $score_vii_2 + $score_viii_1 + $score_viii_1 + $score_ix_1 + $score_ix_2;
        $pdf = PDF::loadview('student_ppdb_pdf',['student'=>$student, 'total_count_score' => $total_count_score]);
        $name = "ppdb-".$student->full_name.".pdf";
        // return $pdf->download($name);
        return $pdf->stream();
    }
}
