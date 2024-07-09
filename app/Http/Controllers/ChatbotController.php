<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sastrawi\Stemmer\StemmerFactory;
use App\Models\Pertanyaan;


class ChatbotController extends Controller
{


    public function getResponse(Request $request)
    {
        $question = $request->input('question');

        // Preprocessing pertanyaan
        $processedQuestion = $this->preprocessText($question);

        // Mencari kesamaan di dalam database
        $response = DB::table('pertanyaan')
            ->select('jawaban')
            ->where('status', '=', 'aktif')
            ->whereRaw('MATCH (pertanyaan) AGAINST (?)', [$processedQuestion])
            ->first();

        if ($response) {
            return response()->json(['answer' => $response->jawaban]);
        } else {
            return response()->json(['answer' => 'Maaf, saya tidak mengerti pertanyaan Anda.']);
        }
    }

    private function preprocessText($text)
    {
        // Case Folding
        $text = strtolower($text);

        // Cleaning (Remove unwanted characters)
        $text = preg_replace('/[^a-z0-9\s]/', '', $text);

        // Tokenizing (Split text into words)
        $words = explode(' ', $text);

        // Normalization and Filtering (Remove stopwords, normalize words, etc.)
        $words = array_filter($words, function ($word) {
            // Add your stopword removal and normalization logic here
            return strlen($word) > 2; // Example: remove words with less than 3 characters
        });

        // Stemming
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
        $words = array_map([$stemmer, 'stem'], $words);

        return implode(' ', $words);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
