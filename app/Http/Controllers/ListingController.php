<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class ListingController extends Controller
{
    //Show all listings
    public function index()
    {


        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(3)
        ]);
    }

    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'room' => ['required', Rule::unique('listings')],
            'checkin' => 'required',
            'checkout' => 'required',
            'price' => 'required',
            'tags' => 'required',
            'accommodations' => 'required',
            'members' => 'required',
            'email' => ['required', 'email'],
            'youremail' => 'required',
            'fullname' => 'required',
            'name' => 'required',
            'phonenumber' => 'required',
            'contactnumber' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/listings')->with('message', 'You Successfully Book Your Reservation Enjoy!');
    }

    //Show Edit Form
    public function edit(Listing $listing)
    {
        // dd($listing);
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update Listing Data
    public function update(Request $request, Listing $listing)
    {

        //Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'room' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'price' => 'required',
            'tags' => 'required',
            'accommodations' => 'required',
            'members' => 'required',
            'email' => ['required', 'email'],
            'youremail' => 'required',
            'fullname' => 'required',
            'name' => 'required',
            'phonenumber' => 'required',
            'contactnumber' => 'required',
            'location' => 'required',
            'address' => 'required',


        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update(($formFields));

        return redirect('/listings')->with('message', 'You Successfully Change your Reservation!');
    }


    //Delete Listing
    public function destroy(Listing $listing)
    {
        ///Make sure loggedin user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/listings')->with('message', 'You cancel your reservation!');
    }

    //Manage Listings
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
