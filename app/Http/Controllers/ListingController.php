<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // get and show all listings
    public function index()
    {

        // $tag_query = request('tag');
        // simplePaginate(2)

        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6)
        ]);
    }


    // get and show all listings
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // delete a listing
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted.');
    }



    // show listing create form
    public function create()
    {
        return view('listings.create');
    }

    // show listing edit form
    public function edit(Listing $listing)
    {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    // update and existing listing 
    public function update(Listing $listing, Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // dd($request->all());
        $listing->update($formFields);
        return back()->with('message', 'Listing updated successfully!');
    }


    // save a new listing to the db
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['email', 'required'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // dd($request->all());
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
