<?php

namespace App\Http\Controllers\Admin\Notify;

use App\Models\Notify\Email;
use Illuminate\Http\Request;
use App\Models\Notify\EmailFile;
use App\Http\Controllers\Controller;
use App\Http\Services\File\FileService;
use App\Http\Requests\Admin\Notify\EmailRequest;
use App\Http\Requests\Admin\Notify\EmailFileRequest;

class EmailFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Email $email)
    {
        return view('admin.notify.email-file.index', compact('email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Email $email)
    {
        return view('admin.notify.email-file.create', compact('email'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailFileRequest $request, Email $email, FileService $fileService)
    {
        $inputs = $request->all();

        if ($request->hasFile('file')) {

            $fileService->setExclusiveDirectory('files' . DIRECTORY_SEPARATOR . 'email-files');

            $fileService->setFileSize($request->file('file'));
            $fileSize = $fileService->getFileSize();
            $result = $fileService->moveToPublic($request->file('file'));
            $fileFormat = $fileService->getFileFormat();
        }

        if ($result === false) {
            return redirect()->route('admin.notify.email-file.index', $email->id)->with('swal-error', 'آپلود فایل شما با خطا مواجه شد');
        }

        $inputs['public_mail_id'] = $email->id;
        $inputs['file_path'] = $result;
        $inputs['file_size'] = $fileSize;
        $inputs['file_type'] = $fileFormat;

        $file = EmailFile::create($inputs);

        return redirect()->route('admin.notify.email-file.index', $email->id)->with('swal-success', 'فایل ایمیل شما با موفقیت ایجاد شد');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailFile $file)
    {
        return view('admin.notify.email-file.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmailFileRequest $request, EmailFile $file, FileService $fileService)
    {
        $inputs = $request->all();

        if ($request->hasFile('file')) {
            if(!empty($file->file_path)){
                $fileService->deleteFile($file->file_path);
            }

            $fileService->setExclusiveDirectory('files' . DIRECTORY_SEPARATOR . 'email-files');

            $fileService->setFileSize($request->file('file'));
            $fileSize = $fileService->getFileSize();
            $result = $fileService->moveToPublic($request->file('file'));
            $fileFormat = $fileService->getFileFormat();
        }

        if ($result === false) {
            return redirect()->route('admin.notify.email-file.index', $file->email->id)->with('swal-error', 'آپلود فایل شما با خطا مواجه شد');
        }

        $inputs['file_path'] = $result;
        $inputs['file_size'] = $fileSize;
        $inputs['file_type'] = $fileFormat;

        $file->update($inputs);

        return redirect()->route('admin.notify.email-file.index', $file->email->id)->with('swal-success', 'فایل ایمیل شما با موفقیت تغییر یافت');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailFile $file)
    {
        $file->delete();
        return redirect()->route('admin.notify.email-file.index', $file->email->id)->with('swal-success', 'فایل ایمیل شما با موفقیت حذف شد');
    }

    public function status(EmailFile $file)
    {

        $file->status = $file->status == 0 ? 1 : 0;
        $result = $file->save();
        if ($result) {
            if ($file->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
