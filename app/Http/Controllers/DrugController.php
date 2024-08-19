<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    protected $web3;
    protected $contract;

    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'drugId' => 'required|string',
            'name' => 'required|string',
            'batchNumber' => 'required|string',
            'manufacturer' => 'required|string',
            'expiryDate' => 'required|date',
        ]);

        // Store the drug information into the database
        Drug::create([
            'drugId' => $validated['drugId'],
            'name' => $validated['name'],
            'batchNumber' => $validated['batchNumber'],
            'manufacturer' => $validated['manufacturer'],
            'expiryDate' => $validated['expiryDate'],
        ]);

        // Redirect or return a success response
        return redirect()->back()->with('success', 'Drug added successfully!');
    }
    public function drug()
    {

        return view('drug');
    }
//    public function __construct()
//    {
//        $this->web3 = new Web3(env('ETHEREUM_NETWORK')); // Set your Ethereum network in the .env file
//        $this->contract = new Contract($this->web3->provider, file_get_contents(storage_path('app/DrugVerificationABI.json')));  // ABI file
//    }

    // Add a new drug
    public function create()
    {
        return view('addDrug'); // Adjust this based on your actual view file name
    }

    // Handle the form submission and store the drug
    // Show the list of drugs
    public function listDrugs()
    {
        $drugs = Drug::all();
        return view('listDrugs', ['drugs' => $drugs]);
    }


    // Verify a drug
    public function verifyDrug(Request $request)
    {
        // Validate the input
        $request->validate([
            'drugId' => 'required|string',
        ]);

        // Find the drug by its ID
        $drug = Drug::where('drugId', $request->input('drugId'))->first();

        // Redirect to result based on whether the drug is found
        if ($drug) {
            return redirect()->route('verificationResult', ['result' => 'yes']);
        } else {
            return redirect()->route('verificationResult', ['result' => 'no']);
        }
    }

    public function updateDrugDistributor(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'drugId' => 'required|exists:drugs,id',
            'newDistributor' => 'required|string|max:255',
        ]);

        // Fetch the drug based on its ID
        $drug = Drug::find($request->drugId);

        // If drug is not found, return an error (though validation should catch this)
        if (!$drug) {
            return redirect()->back()->with('error', 'Drug not found');
        }

        // Update the distributor
        $drug->distributor = $request->newDistributor;

        // Save the changes
        $drug->save();

        // Return a success message or redirect
        return redirect()->back()->with('success', 'Distributor updated successfully');
    }


    public function deleteDrug($id)
    {
        // Find the drug by ID
        $drug = Drug::findOrFail($id);

        // Delete the drug
        $drug->delete();

        // Redirect back to the list with a success message
        return redirect()->route('listDrugs')->with('success', 'Drug deleted successfully.');
    }
}
