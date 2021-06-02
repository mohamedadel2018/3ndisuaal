<?php
// UPLOAD FILES
function uploadFile($request, $relatedModel, $groupName)
{
    $dateTime = date('Ymd_His');
    $fileName = $dateTime . '-' . $request->getClientOriginalName();
    $request->storeAs('upload', $fileName);
    $url = 'upload/' . $fileName;
    $relatedModel->images()->create([
        'name' => $fileName,
        'url' => $url,
        'group_name' => $groupName,
    ]);
}

// UPLOAD FILES
function getFile($relatedModel, $groupName)
{
    return $relatedModel->images->where('group_name', $groupName)->count() > 0 ? asset($relatedModel->images->where('group_name', $groupName)->first()->url) : asset('images/default-image.jpg');
}

function deleteFile($relatedModel,$groupName)
{
    $file = $relatedModel->images()->where('group_name', $groupName);
    $fileDelete = $file->count() > 0 ? File::delete($file->first()->url) : '';
    // dd($file->url);
    // File::delete($file->delete);
    return $relatedModel->images()->where('group_name', $groupName)->delete();
}
// ADMIN LAYOUT PATH
define('ADMIN_LAYOUT', 'livewire.admin.layouts.app');
// ADMIN LAYOUT LOGIN PATH
define('ADMIN_LOGIN_LAYOUT', 'livewire.admin.layouts.app-login');
// PAGINATION
define('PGA', 10);
define('PG', 15);

function admin(){
    return Auth::user();
}

// CHECK PERMATION
function permation($permationName)
{
    if (Auth::user()->cannot($permationName)) {
        return abort(403, __('app.unauthrized'));
    }
    return true;
}

// OVERRIDE VALIDATION MESSAGES
function messages()
{
    return [
        'name_ar.required' => __('app.name_ar_required'),
        'name_en.required' => __('app.name_en_required'),
        'name_id.required' => __('app.name_id_required'),
        'name_ar.unique' => __('app.name_ar_unique'),
        'name_en.unique' => __('app.name_en_unique'),
        'name_id.unique' => __('app.name_id_unique'),
        'program_cat_id.required' => __('app.category_required'),
        'book_cat_id.required' => __('app.category_required'),
        'selectedState.required' => __('app.category_required'),
        'program_sub_cat_id.required' => __('app.sub_category_required'),
        'encyclopedia_sub_cat_id.required' => __('app.required'),
        'book_sub_cat_id.required' => __('app.sub_category_required'),
        'book_sub_cat_id.exists' => __('app.sub_category_required'),
        'instractor_id.exists' => __('app.cant_empty'),
        'about_ar.required' => __('app.about_ar_rquired'),
        'about_en.required' => __('app.about_en_rquired'),
        'about_id.required' => __('app.about_id_rquired'),
        'image.image' => __('app.image_image'),
        'word.required' => __('app.word_rquired'),
        'instractor_id.required' => __('app.instractor_id'),
        'title_ar.required' => __('app.title_ar_rquired'),
        'title_en.required' => __('app.title_en_rquired'),
        'title_id.required' => __('app.title_id_rquired'),
        'video_ar.required' => __('app.video_ar_rquired'),
        'video_en.required' => __('app.video_en_rquired'),
        'video_id.required' => __('app.video_id_rquired'),

        'question_ar.required' => __('app.question_ar_rquired'),
        'question_en.required' => __('app.question_en_rquired'),
        'question_id.required' => __('app.question_id_rquired'),
        'answer_ar.required' => __('app.answer_ar_rquired'),
        'answer_en.required' => __('app.answer_en_rquired'),
        'answer_id.required' => __('app.answer_id_rquired'),
        'image.required' => __('app.image_required'),
        'country_id.required' => __('app.required'),
        'read_cat_id.required' => __('app.required'),
        'read_sub_cat_id.required' => __('app.required'),
        'program_id.required' => __('app.required'),
        'level_id.required' => __('app.required'),
        'type.required' => __('app.required'),
        'name.required' => __('app.required'),
        'phone.required' => __('app.required'),
        'id_number.required' => __('app.required'),
        'good_time.required' => __('app.required'),
        'answer.required' => __('app.required'),
        'file.required' => __('app.file_required'),
        'file.mimes' => __('app.file_pdf'),
        'message.required' => __('app.required'),
        'text.required' => __('app.required'),
        'question.required' => __('app.required'),
        'question_code.required' => __('app.required'),
        'question_code.exists' => __('app.code_invalid'),
        'is_video.in' => __('app.required'),
        'label_en.required' => __('app.required'),
        'label_ar.required' => __('app.required'),
        'permationFromUpdating.required' => __('app.permation_required'),

    ];
}
// SLUG DATA
function toSlug($string, $separator = '-')
{
    $string1 = trim($string);
    $string2 = mb_strtolower($string1, 'UTF-8');
    $string3 = Str_replace(' ','-', $string2);
    $string4 = Str_replace('  ','-', $string3);
    return $string4;
}

function parsePath($path)
{
    return str_replace(url('/') . '/upload/', ' ', $path);
}
