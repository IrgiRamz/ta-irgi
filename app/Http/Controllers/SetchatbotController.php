<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Sastrawi\Stemmer\StemmerFactory;
use voku\helper\StopWords;



class SetchatbotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_tanya = Pertanyaan::with('user')->get();
        return view('admin.setchatbot.index', compact('ar_tanya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setchatbot.create');
    }

    private function preprocessText($text)
    {
        // Case Folding
        $text = strtolower($text);

        // Cleaning (Remove unwanted characters)
        $text = preg_replace('/[^a-z\s]/', '', $text);

        // Tokenizing (Split text into words)
        $words = explode(' ', $text);

        // Normalization and Filtering (Remove stopwords, normalize words, etc.)
        /*$words = array_filter($words, function ($word) {
            // Add your stopword removal and normalization logic here
            return strlen($word) > 2; // Example: remove words with less than 3 characters
        });*/

        // Get Indonesian stopwords
        $stopWords = new StopWords();
        $stopwords = $stopWords->getStopWordsFromLanguage('id');

        // Normalization and Filtering (Remove stopwords, normalize words, etc.)
        $words = array_filter($words, function ($word) use ($stopwords) {
            return strlen($word) > 2 && !in_array($word, $stopwords);
        });

        // Stemming
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
        $words = array_map([$stemmer, 'stem'], $words);

        return implode(' ', $words);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => ['required', 'string'],
            'jawaban' => ['required', 'string'],
        ]);

        $question = $request->pertanyaan;

        $processedQuestion = $this->preprocessText($question);


        Pertanyaan::create([
            'pertanyaan' => $processedQuestion,
            'pertanyaan2' => $request['pertanyaan'],
            'jawaban' => $request['jawaban'],
            'status' => $request['status'],
            'iduser' => $request['pembuat'],
        ]);
        return redirect()->route('setchatbot.index')->with('success', 'Data Chatbot Berhasil Ditambah.');
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
        $row = Pertanyaan::find($id);
        return view('admin.setchatbot.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chatbot = Pertanyaan::find($id);

        $request->validate([
            'pertanyaan' => ['required', 'string'],
            'jawaban' => ['required', 'string'],
        ]);

        $processedQuestion = $this->preprocessText($request->pertanyaan);

        $chatbot->pertanyaan = $processedQuestion;
        $chatbot->pertanyaan2 = $request->pertanyaan;
        $chatbot->jawaban = $request->jawaban;
        $chatbot->status = $request->status;

        $chatbot->save();

        return redirect()->route('setchatbot.index')->with('success', 'Data Chatbot Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chatbot = Pertanyaan::find($id);
        if (!$chatbot) {
            return redirect()->route('setchatbot.index')->with('error', 'Data tidak ditemukan.');
        }
        try {
            Pertanyaan::where('idpertanyaan', $id)->delete();
            return redirect()->route('setchatbot.index')->with('success', 'Data Chatbot Berhasil Dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('setchatbot.index')->with('error', 'Gagal Menghapus Data.');
        }
    }
}
