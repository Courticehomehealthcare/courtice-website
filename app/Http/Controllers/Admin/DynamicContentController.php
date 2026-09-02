<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Lib\JsonResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\DynamicContent;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;

class DynamicContentController extends Controller
{
    use Authenticatable;

    private $jsonResponse;

    public function __construct()
    {
        $this->jsonResponse = new JsonResponse();
    }
    public function index()
    {
        $content = DynamicContent::all();
        return view('admin.dynamiccontent.index', compact('content'));
    }

    public function addcontent(Request $request)
    {
        try {
            $Services = DynamicContent::create([
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'instagram_link' => $request->instagram_link,
                'phone_number' => $request->phone_number,
                'operating_hours' => $request->operating_hours,
                'description' => $request->description,
                'email' => $request->email,
                'address' => $request->address,
                'companyname' => $request->companyname,
                'copyrightyear' => $request->copyrightyear,
                'servicesdate' => Carbon::now(),
                'status' => 1,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);

            // Handle logo image upload
            if ($request->hasFile('logoimage')) {
                $logoimage = $request->file('logoimage');
                $file_name = hexdec(uniqid()) . '.' . strtolower($logoimage->getClientOriginalExtension());
                $up_location = 'uploads/logo/';
                $logoimage->move($up_location, $file_name);
                $Services->logoimage = $up_location . $file_name;
                $Services->save();
            }

            // Handle favicon upload
            if ($request->hasFile('favicon')) {
                $favicon = $request->file('favicon');
                $fav_name = hexdec(uniqid()) . '.' . strtolower($favicon->getClientOriginalExtension());
                $fav_location = 'uploads/favicon/';
                $favicon->move($fav_location, $fav_name);
                $Services->favicon = $fav_location . $fav_name;
                $Services->save();
            }

            return $this->jsonResponse->createResponse($request->all(), true, 'Service Added Successfully', 200);

        } catch (\Throwable $th) {
            return $this->jsonResponse->createResponse([], false, $th->getMessage(), 401);
        }
    }

    // Update existing content

    public function updatecontent(Request $request, $id)
    {
        try {
            $Services = DynamicContent::where('id', $id)->first();

            if (!$Services) {
                return $this->jsonResponse->createResponse([], false, 'Service not found!', 404);
            }

            $Services->update([
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'instagram_link' => $request->instagram_link,
                'phone_number' => $request->phone_number,
                'copyrightyear' => $request->copyrightyear,
                'description' => $request->description,
                'operating_hours' => $request->operating_hours,
                'companyname' => $request->companyname,
                'email' => $request->email,
                'address' => $request->address,
            ]);

            if ($request->hasFile('logoimage')) {
                $logoimage = $request->file('logoimage');
                $file_name = hexdec(uniqid()) . '.' . strtolower($logoimage->getClientOriginalExtension());
                $up_location = 'uploads/logo/';
                $logoimage->move($up_location, $file_name);
                $Services->logoimage = $up_location . $file_name;
                $Services->save();
            }

            if ($request->hasFile('favicon')) {
                $favicon = $request->file('favicon');
                $fav_name = hexdec(uniqid()) . '.' . strtolower($favicon->getClientOriginalExtension());
                $fav_location = 'uploads/favicon/';
                $favicon->move($fav_location, $fav_name);
                $Services->favicon = $fav_location . $fav_name;
                $Services->save();
            }

            return redirect()->back()->with('success', 'Settings Updated Successfully');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
    public function edit($id)
    {
        $content = DynamicContent::findOrFail($id);
        return view('admin.dynamiccontent.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        try {
            $content = DynamicContent::findOrFail($id);

            $content->update([
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'linkedin_link' => $request->linkedin_link,
                'instagram_link' => $request->instagram_link,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'address' => $request->address,
                'companyname' => $request->companyname,
                'operating_hours' => $request->operating_hours,
                'copyrightyear' => $request->copyrightyear,
                'description' => $request->description,
                'flyer_tagline' => $request->flyer_tagline,
                'flyer_title' => $request->flyer_title,
                'flyer_description' => $request->flyer_description,
            ]);

            // logo upload
            if ($request->hasFile('logoimage')) {
                $logo = $request->file('logoimage');
                $filename = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
                $path = 'uploads/logo/';
                $logo->move($path, $filename);

                $content->logoimage = $path . $filename;
                $content->save();
            }

            // favicon upload
            if ($request->hasFile('favicon')) {
                $fav = $request->file('favicon');
                $favname = hexdec(uniqid()) . '.' . $fav->getClientOriginalExtension();
                $favpath = 'uploads/favicon/';
                $fav->move($favpath, $favname);

                $content->favicon = $favpath . $favname;
                $content->save();
            }

            // flyer image upload
            if ($request->hasFile('flyer_image')) {
                $fimage = $request->file('flyer_image');
                $fimage_name = hexdec(uniqid()) . '.' . $fimage->getClientOriginalExtension();
                $fimage_path = 'uploads/flyer/';
                $fimage->move($fimage_path, $fimage_name);

                $content->flyer_image = $fimage_path . $fimage_name;
                $content->save();
            }

            // flyer pdf upload
            if ($request->hasFile('flyer_pdf')) {
                $fpdf = $request->file('flyer_pdf');
                $fpdf_name = hexdec(uniqid()) . '.' . $fpdf->getClientOriginalExtension();
                $fpdf_path = 'uploads/flyer/';
                $fpdf->move($fpdf_path, $fpdf_name);

                $content->flyer_pdf = $fpdf_path . $fpdf_name;
                $content->save();
            }

            return redirect()->route('care.settings.index')->with('success', 'Content Updated!');

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }



    // Add new content
    // public function addcontent(Request $request)
    // {
    //     try {
    //         $Services = DynamicContent::create([
    //             'facebook_link' => $request->facebook_link,
    //             'twitter_link' => $request->twitter_link,
    //             'linkedin_link' => $request->linkedin_link,
    //             'instagram_link' => $request->instagram_link,
    //             'phone_number' => $request->phone_number,
    //             'operating_hours'=> $request->operating_hours,
    //             'description'=> $request->description,
    //             'email' => $request->email,
    //             'address' => $request->address,
    //             'companyname'=> $request->companyname,
    //             'copyrightyear'=> $request->copyrightyear,
    //             'servicesdate' => Carbon::now(),
    //             'status' => 1,
    //             'updated_at' => Carbon::now(),
    //             'created_at' => Carbon::now(),
    //         ]);

    //         // Handle logo image upload
    //         if ($request->hasFile('logoimage')) {
    //             $logoimage = $request->file('logoimage');
    //             $file_name = hexdec(uniqid()) . '.' . strtolower($logoimage->getClientOriginalExtension());
    //             $up_location = 'uploads/logo/';
    //             $logoimage->move($up_location, $file_name);
    //             $Services->logoimage = $up_location . $file_name;
    //             $Services->save();
    //         }

    //         return $this->jsonResponse->createResponse($request->all(), true, 'Service Added Successfully', 200);

    //     } catch (\Throwable $th) {
    //         return $this->jsonResponse->createResponse([], false, $th->getMessage(), 401);
    //     }
    // }

    // Update existing content
    // public function updatecontent(Request $request, $id)
    // {
    //     try {
    //         $Services = DynamicContent::where('id', $id)->first();

    //         if (!$Services) {
    //             return $this->jsonResponse->createResponse([], false, 'Service not found!', 404);
    //         }

    //         $Services->update([
    //             'facebook_link' => $request->facebook_link,
    //             'twitter_link' => $request->twitter_link,
    //             'linkedin_link' => $request->linkedin_link,
    //             'instagram_link' => $request->instagram_link,
    //             'phone_number' => $request->phone_number,
    //             'copyrightyear'=> $request->copyrightyear,
    //             'description'=> $request->description,
    //             'operating_hours'=> $request->operating_hours,
    //             'companyname'=> $request->companyname,
    //             'email' => $request->email,
    //             'address' => $request->address,
    //         ]);

    //         // Handle logo image upload
    //         if ($request->hasFile('logoimage')) {
    //             $logoimage = $request->file('logoimage');
    //             $file_name = hexdec(uniqid()) . '.' . strtolower($logoimage->getClientOriginalExtension());
    //             $up_location = 'uploads/logo/';
    //             $logoimage->move($up_location, $file_name);
    //             $Services->logoimage = $up_location . $file_name;
    //             $Services->save();
    //         }

    //         return $this->jsonResponse->createResponse($request->all(), true, 'Service Updated Successfully', 200);

    //     } catch (\Throwable $th) {
    //         return $this->jsonResponse->createResponse([], false, $th->getMessage(), 500);
    //     }
    // }

    // View a single record by ID
    public function view($id)
    {
        $Actor = DynamicContent::where('id', $id)->first();

        if ($Actor) {
            return $this->jsonResponse->createResponse($Actor, true, 'Service loaded!', 200);
        }

        return $this->jsonResponse->createResponse([], false, 'No data!', 200);
    }

    // Get a record by ID (alternative)
    public function getById($id)
    {
        $dynamicContent = DynamicContent::find($id);

        if (!$dynamicContent) {
            return response()->json([
                'success' => false,
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $dynamicContent,
        ]);
    }

    // Get all records
    public function Getall(Request $request)
    {
        $Services = DynamicContent::paginate(15);

        if ($Services->isNotEmpty()) {
            return $this->jsonResponse->createResponse($Services, true, 'Social media loaded!', 200);
        }

        return $this->jsonResponse->createResponse([], false, 'No data!', 200);
    }
}
