<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/office', 'OfficeController@office')->name('office');

Route::post('/officepost', 'OfficeController@officepost')->name('officepost');

Route::get('/officepostdata', 'OfficeController@officepostdata')->name('officepostdata');

Route::get('/showofficedata/{id}', 'OfficeController@showofficedata');

Route::post('/updateofficedata', 'OfficeController@updateofficedata')->name('updateofficedata');




Route::get('/department', 'OfficeController@department')->name('department');

Route::post('/departmentpost', 'OfficeController@departmentpost')->name('departmentpost');

Route::get('/departmentpostdata', 'OfficeController@departmentpostdata')->name('departmentpostdata');

Route::get('/showdepartmentdata/{id}', 'OfficeController@showdepartmentdata');

Route::post('/updatedepartmentdata', 'OfficeController@updatedepartmentdata')->name('updatedepartmentdata');




Route::get('/section', 'OfficeController@section')->name('section');

Route::post('/sectionpost', 'OfficeController@sectionpost')->name('sectionpost');

Route::get('/sectionpostdata', 'OfficeController@sectionpostdata')->name('sectionpostdata');

Route::get('/showsectiondata/{id}', 'OfficeController@showsectiondata');

Route::post('/updatesectiondata', 'OfficeController@updatesectiondata')->name('updatesectiondata');




Route::get('/seat', 'OfficeController@seat')->name('seat');

Route::post('/seatpost', 'OfficeController@seatpost')->name('seatpost');

Route::get('/seatpostdata', 'OfficeController@seatpostdata')->name('seatpostdata');

Route::get('/showseatdata/{id}', 'OfficeController@showseatdata');

Route::post('/updateseatdata', 'OfficeController@updateseatdata')->name('updateseatdata');


Route::get('getdepartment', function () {
        $id = Input::get('option');
        $departments = \App\Department::where('office_id',$id)->get();
        return $departments->pluck('dept_name', 'id');
    });

Route::get('getsection', function () {
        $id = Input::get('option');
        $sections = \App\Section::where('department_id',$id)->get();
        return $sections->pluck('section_name', 'id');
    });



Route::get('/role', 'OfficeController@role')->name('role');

Route::post('/rolepost', 'OfficeController@rolepost')->name('rolepost');

Route::get('/rolepostdata', 'OfficeController@rolepostdata')->name('rolepostdata');

Route::get('/showroledata/{id}', 'OfficeController@showroledata');

Route::post('/updateroledata', 'OfficeController@updateroledata')->name('updateroledata');





Route::get('/permission', 'OfficeController@permission')->name('permission');

Route::post('/permissionpost', 'OfficeController@permissionpost')->name('permissionpost');

Route::get('/permissionpostdata', 'OfficeController@permissionpostdata')->name('permissionpostdata');

Route::get('/showpermissiondata/{id}', 'OfficeController@showpermissiondata');

Route::post('/updatepermissiondata', 'OfficeController@updatepermissiondata')->name('updatepermissiondata');




Route::get('/role_permission', 'OfficeController@role_permission')->name('role_permission');

Route::post('/role_permissionpost', 'OfficeController@role_permissionpost')->name('role_permissionpost');

Route::get('/role_permissionpostdata', 'OfficeController@role_permissionpostdata')->name('role_permissionpostdata');

Route::get('/showrole_permissiondata/{id}', 'OfficeController@showrole_permissiondata');

Route::post('/cancelrole_permissiondata', 'OfficeController@cancelrole_permissiondata');



Route::get('/seat_permission', 'OfficeController@seat_permission')->name('seat_permission');

Route::post('/seat_permissionpost', 'OfficeController@seat_permissionpost')->name('seat_permissionpost');

Route::get('/seat_permissionpostdata', 'OfficeController@seat_permissionpostdata')->name('seat_permissionpostdata');

Route::get('/showseat_permissiondata/{id}', 'OfficeController@showseat_permissiondata');

Route::post('/cancelseat_permissiondata', 'OfficeController@cancelseat_permissiondata');



Route::get('/seat_role', 'OfficeController@seat_role')->name('seat_role');

Route::post('/seat_rolepost', 'OfficeController@seat_rolepost')->name('seat_rolepost');

Route::get('/seat_rolepostdata', 'OfficeController@seat_rolepostdata')->name('seat_rolepostdata');

Route::get('/showseat_roledata/{id}', 'OfficeController@showseat_roledata');

Route::post('/cancelseat_roledata', 'OfficeController@cancelseat_roledata');



Route::get('/user_seat', 'OfficeController@user_seat')->name('user_seat');

Route::post('/user_seatpost', 'OfficeController@user_seatpost')->name('user_seatpost');

Route::get('/user_seatpostdata', 'OfficeController@user_seatpostdata')->name('user_seatpostdata');

Route::get('/showuser_seatdata/{id}', 'OfficeController@showuser_seatdata');

Route::post('/canceluser_seatdata', 'OfficeController@canceluser_seatdata');



Route::get('/subject', 'SubjectController@subject')->name('subject');

Route::post('/subjectpost', 'SubjectController@subjectpost')->name('subjectpost');

Route::get('/subjectpostdata', 'SubjectController@subjectpostdata')->name('subjectpostdata');

Route::get('/showsubjectdata/{id}', 'SubjectController@showsubjectdata');

Route::post('/updatesubjectdata', 'SubjectController@updatesubjectdata')->name('updatesubjectdata');



Route::get('/subject_group', 'SubjectController@subject_group')->name('subject_group');

Route::post('/subject_grouppost', 'SubjectController@subject_grouppost')->name('subject_grouppost');

Route::get('/subject_grouppostdata', 'SubjectController@subject_grouppostdata')->name('subject_grouppostdata');

Route::get('/showsubject_groupdata/{id}', 'SubjectController@showsubject_groupdata');

Route::post('/updatesubject_groupdata', 'SubjectController@updatesubject_groupdata')->name('updatesubject_groupdata');



Route::get('/subjectgroup_subject', 'SubjectController@subjectgroup_subject')->name('subjectgroup_subject');

Route::post('/subjectgroup_subjectpost', 'SubjectController@subjectgroup_subjectpost')->name('subjectgroup_subjectpost');

Route::get('/subjectgroup_subjectpostdata', 'SubjectController@subjectgroup_subjectpostdata')->name('subjectgroup_subjectpostdata');

Route::get('/showsubjectgroup_subjectdata/{id}', 'SubjectController@showsubjectgroup_subjectdata');

Route::post('/cancelsubjectgroup_subjectdata', 'SubjectController@cancelsubjectgroup_subjectdata');



Route::get('/action', 'SubjectController@action')->name('action');

Route::post('/actionpost', 'SubjectController@actionpost')->name('actionpost');

Route::get('/actionpostdata', 'SubjectController@actionpostdata')->name('actionpostdata');

Route::get('/showactiondata/{id}', 'SubjectController@showactiondata');

Route::post('/updateactiondata', 'SubjectController@updateactiondata')->name('updateactiondata');



Route::get('/action_subjectgroup', 'SubjectController@action_subjectgroup')->name('action_subjectgroup');

Route::post('/action_subjectgrouppost', 'SubjectController@action_subjectgrouppost')->name('action_subjectgrouppost');

Route::get('/action_subjectgrouppostdata', 'SubjectController@action_subjectgrouppostdata')->name('action_subjectgrouppostdata');

Route::get('/showaction_subjectgroupdata/{id}', 'SubjectController@showaction_subjectgroupdata');

Route::post('/cancelaction_subjectgroupdata', 'SubjectController@cancelaction_subjectgroupdata');



Route::get('/creation_of_tapal', 'OfficeController@creation_of_tapal')->name('creation_of_tapal');

Route::post('/creation_of_tapalpost', 'OfficeController@creation_of_tapalpost')->name('creation_of_tapalpost');

Route::get('/creation_of_tapalpostdata', 'OfficeController@creation_of_tapalpostdata')->name('creation_of_tapalpostdata');

Route::get('/showcreation_of_tapaldata/{id}', 'OfficeController@showcreation_of_tapaldata');

Route::post('/updatecreation_of_tapaldata', 'OfficeController@updatecreation_of_tapaldata')->name('updatecreation_of_tapaldata');


Route::get('getsubject', function () {
        $id = Input::get('option');
        $subjects = \App\Subjectgroup_subject::with('subject')->where('subject_group_id',$id)->get();
       // print_r($subjects);
        return $subjects->pluck('subject.subject','id');
    });



Route::get('/tapal_view/{id}', 'OfficeController@tapal_view')->name('tapal_view');

Route::post('/tapal_viewpost', 'OfficeController@tapal_viewpost');

Route::get('/tapal_viewpostdata', 'OfficeController@tapal_viewpostdata')->name('tapal_viewpostdata');


Route::get('getsection', function () {
        $id = Input::get('option');
        $sections = \App\Section::where('department_id',$id)->get();
        return $sections->pluck('section_name', 'id');
    });

Route::get('getseat', function () {
        $id = Input::get('option');
        $seats = \App\Seat::where('section_id',$id)->get();
        return $seats->pluck('seat_name', 'id');
    });

Route::post('/tapal_forwardpost', 'OfficeController@tapal_forwardpost');




Route::get('/inbox', 'OfficeController@inbox')->name('inbox');
