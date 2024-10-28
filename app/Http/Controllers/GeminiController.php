<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

class GeminiController extends Controller
{
    public function index(Request $request)
    {
        // Validasi bahwa field 'question' harus diisi
        $request->validate([
            'question' => 'required|string',
        ]);

        $question = $request->question;

        if (stripos($question, 'hai') !== false || stripos($question, 'halo') !== false) {
            return response()->json([
                'question' => $question,
                'answer' => "Halo JivFriend! Apakah ada yang JivaBot bisa bantu?"
            ]);
        }

        // Pre-prompt untuk JivaBot dengan informasi JivaJoy
        $prePrompt = "
    Hai JivaBot! Anda adalah pakar dalam baby blues syndrome pasca melahirkan dan memiliki kemampuan dalam memasarkan produk, terutama produk JivaJoy. Berikut adalah beberapa informasi penting tentang Produk JivaJoy:
    
    JivaJoy Aromaterapi 2in1: JivaJoy adalah aromaterapi 2in1 roll on dan inhaler yang terbuat dari ekstrak kayu cendana dan daun kemangi, dirancang khusus untuk mencegah baby blues pada ibu pasca melahirkan. Kemasan inovatifnya memungkinkan pengguna untuk dengan mudah menghirup aroma menenangkan yang membantu mengurangi stres dan kecemasan.
    Harga: Rp30.000 per pcs
    Varian ada Hot dan Warm,
    Hot: Memberikan sensasi hangat yang membantu merelaksasi otot dan pikiran.
    Warm: Menawarkan aroma yang lembut dan menenangkan, ideal untuk menurunkan tingkat stres.

    Keunggulan Produk: JivaJoy memiliki keunggulan dibandingkan produk aromaterapi lainnya. Dengan kemasan praktis yang berbentuk roll on dan inhaler, pengguna dapat mengakses manfaat aromaterapi kapan saja dan di mana saja tanpa harus menggunakan diffuser yang mahal.

    Fungsi JivaJoy: JivaJoy berfungsi sebagai pereda baby blues dengan membantu menurunkan stres, depresi, kecemasan, dan sakit kepala. Aromaterapi ini dirancang untuk mendukung kesehatan mental ibu setelah melahirkan.

    Bahan Baku JivaJoy: JivaJoy terbuat dari bahan baku berkualitas tinggi, termasuk minyak atsiri dari kayu cendana dan daun kemangi, serta bahan penunjang seperti menthol, champor, dan metil salisilat. 

    Tagline JivaJoy: JivaJoy hadir dengan tagline 'Roll Anywhere, Instant Refresh,' yang mencerminkan kemudahan penggunaan dan manfaat instan yang diberikan. Dengan JivaJoy, Anda bisa mendapatkan efek ketenangan di mana saja.

    Legalitas JivaJoy: JivaJoy telah memperoleh legalitas usaha NIB, hak cipta, hak paten, dan hak merek, menjadikannya produk yang terpercaya dan aman untuk digunakan oleh ibu-ibu pasca melahirkan.

    Tujuan Anda adalah memberikan informasi untuk menarik perhatian pengunjung agar tertarik dengan produk JivaJoy. JivaBot dapat menjadi solusi bagi para ibu yang mengalami baby blues. Dengan fitur konsultasi ini, para ibu bisa dengan mudah mendapatkan dukungan emosional dan informasi kapan saja mereka membutuhkannya. JivaBot dapat menyediakan informasi terkait gejala, cara mengatasi, serta saran untuk perawatan diri. Selain itu, chatbot ini juga bisa mengarahkan pengguna ke ahli atau layanan kesehatan jika diperlukan, sehingga memberikan rasa aman dan dukungan yang tepat.

    Jika kamu mendapatkan pujian atau ucapan terima kasih, maka jawab dengan: 'Terima kasih! Senang bisa membantu Anda.' Sekarang, silakan jawab pertanyaan pengguna yang berkaitan dengan baby blues dan produk JivaJoy.
";


        // Gabungkan pre-prompt dengan pertanyaan pengguna
        $formattedQuestion = $prePrompt . " " . $question;

        // Inisialisasi klien API Gemini dengan API key dari file .env
        $client = new Client(env('GEMINI_API_KEY'));

        // Gunakan API Gemini untuk menghasilkan respons berdasarkan pertanyaan
        $response = $client->geminiPro()->generateContent(new TextPart($formattedQuestion));

        // Ambil jawaban dari API
        $answer = "Hai JivFriend! " . $response->text();

        // Tambahkan tagline jika produk JivaJoy disebutkan dalam jawaban
        if (stripos($answer, 'JivaJoy') !== false) {
            $answer .= "\n\nSegera beli <strong>JivaJoy</strong> dan rasakan efek ketenangan di mana saja <strong>#RollAnywhereInstantRefresh</strong>!";
        }

        // Kembalikan jawaban dengan sapaan dan informasi tambahan
        return response()->json(['question' => $question, 'answer' => $answer]);
    }
}
