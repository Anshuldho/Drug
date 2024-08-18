<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    protected $web3;
    protected $contract;


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
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'drugId' => 'required|string',
            'name' => 'required|string',
            'batchNumber' => 'required|string',
            'manufacturer' => 'required|string',
            'expiryDate' => 'required|date',
        ], [
            'drugId.required' => 'Please enter the Drug ID.',
            'name.required' => 'Please enter the drug name.',
            'batchNumber.required' => 'Please enter the batch number.',
            'manufacturer.required' => 'Please enter the manufacturer.',
            'expiryDate.required' => 'Please enter the expiry date.',
        ]);

        // Create a new Drug instance and save to database
        Drug::create($validated);

        // Log a message for debugging
        \Log::info('New drug added:', $validated);

        // Redirect to the drug list page
        return redirect()->route('listDrugs');
    }


    // Verify a drug
    public function verifyDrug(Request $request)
    {
        $drugId = $request->input('drugId');

        $this->contract->at(env('CONTRACT_ADDRESS'))->call('verifyDrug', $drugId, function ($err, $result) {
            if ($err !== null) {
                return response()->json(['error' => 'Drug not found'], 404);
            }
            return response()->json(['drug' => $result]);
        });
    }

public function updateDrugDistributor(Request $request)
{
    $drugId = $request->input('drugId');
    $newDistributor = $request->input('newDistributor');

    $this->contract->at(env('CONTRACT_ADDRESS'))->send('updateDrugDistributor', $drugId, $newDistributor, function ($err, $transaction) {
        if ($err !== null) {
            return response()->json(['error' => 'Failed to update drug distributor'], 500);
        }
        return response()->json(['message' => 'Drug distributor updated successfully', 'transaction' => $transaction]);
    });
}
    public function deleteDrug(Request $request)
    {
        $drugId = $request->input('drugId');

        $this->contract->at(env('CONTRACT_ADDRESS'))->send('deleteDrug', $drugId, function ($err, $transaction) {
            if ($err !== null) {
                return response()->json(['error' => 'Failed to delete drug'], 500);
            }
            return response()->json(['message' => 'Drug deleted successfully', 'transaction' => $transaction]);
        });
    }


}
